<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show()
    {
        $galleries = Gallery::all();

        return view('gallery',['galleries' => $galleries]);
    }
}
