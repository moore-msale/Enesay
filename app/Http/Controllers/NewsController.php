<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function show($id)
    {

        $new = News::find($id);

        return view('news_page',['new' => $new, 'content' => \App\MainPage::first()]);
    }
}
