<?php

namespace App\Http\Controllers;

use App\Services\SectorNewsFeed;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function serviceShow(int $id)
    {
        $service = config("service_offerings.{$id}");

        abort_if($service === null, 404);

        return view('pages.services_details', ['id' => $id, 'service' => $service]);
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function projectShow(int $id)
    {
        $project = config("projects.{$id}");

        abort_if($project === null, 404);

        return view('pages.project_details', ['id' => $id, 'project' => $project]);
    }

    public function blog(Request $request, SectorNewsFeed $sectorNewsFeed)
    {
        $query = trim((string) $request->query('q', ''));
        $allArticles = config('blog_articles');
        $articles = $allArticles;

        if ($query !== '') {
            $articles = array_filter($allArticles, function ($article) use ($query) {
                $haystack = $article['title'].' '.$article['excerpt'].' '.$article['tag'];

                return mb_stripos($haystack, $query) !== false;
            });
        }

        $categories = [];
        foreach ($allArticles as $article) {
            foreach (explode(',', $article['tag']) as $tag) {
                $tag = trim($tag);
                $categories[$tag] = ($categories[$tag] ?? 0) + 1;
            }
        }

        return view('pages.blog', [
            'articles' => $articles,
            'query' => $query,
            'categories' => $categories,
            'sectorNews' => $sectorNewsFeed->getLatest(),
        ]);
    }

    public function blogShow(int $id, SectorNewsFeed $sectorNewsFeed)
    {
        $article = config("blog_articles.{$id}");

        abort_if($article === null, 404);

        $categories = [];
        foreach (config('blog_articles') as $a) {
            foreach (explode(',', $a['tag']) as $tag) {
                $tag = trim($tag);
                $categories[$tag] = ($categories[$tag] ?? 0) + 1;
            }
        }

        return view('pages.single_blog', [
            'id' => $id,
            'article' => $article,
            'categories' => $categories,
            'sectorNews' => $sectorNewsFeed->getLatest(),
        ]);
    }
}
