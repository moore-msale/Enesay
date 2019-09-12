<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\MainPage;
use App\News;
use App\Plan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $news = News::first();
        $content = MainPage::first();
        $plan = Plan::where('active', 1)->first();
        return view('welcome', [
            'galleries' => $galleries,
            'content' => $content,
            'plan' => $plan,
            'news' => $news,
        ]);
    }

    public function gallery()
    {
        return view('gallery', [
            'galleries' => \App\Gallery::all(),
            'content' => \App\MainPage::first(),
        ]);
    }
}
