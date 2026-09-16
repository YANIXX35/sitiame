<?php

namespace App\Http\Controllers;

use App\Services\SectorNewsFeed;

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
        return view('pages.services_details', ['id' => $id]);
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function projectShow(int $id)
    {
        return view('pages.project_details', ['id' => $id]);
    }

    public function blog(SectorNewsFeed $sectorNewsFeed)
    {
        return view('pages.blog', ['sectorNews' => $sectorNewsFeed->getLatest()]);
    }

    public function blogShow(int $id, SectorNewsFeed $sectorNewsFeed)
    {
        return view('pages.single_blog', ['id' => $id, 'sectorNews' => $sectorNewsFeed->getLatest()]);
    }
}
