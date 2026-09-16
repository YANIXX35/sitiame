<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SectorNewsFeed
{
    /**
     * RSS sources covering BTP, construction and the broader Ivorian
     * economy — used to power the "Veille du secteur" sidebar widget.
     */
    protected array $sources = [
        ['name' => 'Batirici', 'url' => 'https://www.batirici.ci/feed'],
        ['name' => 'Abidjan.net Économie', 'url' => 'https://news.abidjan.net/rss/economie.xml'],
    ];

    public function getLatest(int $limit = 5): array
    {
        return Cache::remember('sector_news_feed', now()->addHour(), function () use ($limit) {
            $items = [];

            foreach ($this->sources as $source) {
                try {
                    $response = Http::timeout(5)->get($source['url']);

                    if (! $response->successful()) {
                        continue;
                    }

                    $xml = @simplexml_load_string($response->body());

                    if ($xml === false || ! isset($xml->channel->item)) {
                        continue;
                    }

                    foreach ($xml->channel->item as $item) {
                        $pubDate = isset($item->pubDate) ? strtotime((string) $item->pubDate) : time();

                        $items[] = [
                            'title' => trim((string) $item->title),
                            'link' => trim((string) $item->link),
                            'source' => $source['name'],
                            'timestamp' => $pubDate ?: time(),
                        ];
                    }
                } catch (\Throwable $e) {
                    Log::warning("SectorNewsFeed: failed to fetch {$source['name']}: {$e->getMessage()}");
                }
            }

            usort($items, fn ($a, $b) => $b['timestamp'] <=> $a['timestamp']);

            return array_slice($items, 0, $limit);
        });
    }
}
