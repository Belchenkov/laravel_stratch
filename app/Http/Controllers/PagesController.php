<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To Laravel';
        return view('pages.index', ['title' => $title]);
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about', ['title' => $title]);
    }

    public function services()
    {
        $title= 'Services';
        return view('pages.services', ['title' => $title]);
    }
}
