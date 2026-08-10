<?php

namespace App\Http\Controllers;

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

    public function blog()
    {
        return view('pages.blog');
    }

    public function blogShow(int $id)
    {
        return view('pages.single_blog', ['id' => $id]);
    }

    public function elements()
    {
        return view('pages.elements');
    }
}
