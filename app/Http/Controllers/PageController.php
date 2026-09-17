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
        $articles = config('blog_articles');

        if ($query !== '') {
            $articles = array_filter($articles, function ($article) use ($query) {
                $haystack = $article['title'].' '.$article['excerpt'].' '.$article['tag'];

                return mb_stripos($haystack, $query) !== false;
            });
        }

        return view('pages.blog', [
            'articles' => $articles,
            'query' => $query,
            'sectorNews' => $sectorNewsFeed->getLatest(),
        ]);
    }

    public function blogShow(int $id, SectorNewsFeed $sectorNewsFeed)
    {
        $article = config("blog_articles.{$id}");

        abort_if($article === null, 404);

        return view('pages.single_blog', ['id' => $id, 'article' => $article, 'sectorNews' => $sectorNewsFeed->getLatest()]);
    }
}
