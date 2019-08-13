<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class PhotoController extends Controller
{
    public function create()
    {
        return view('photo');
    }

    public function store(Request $request)
    {
        if ($request->photos) {
            foreach ($request->photos as $file) {
                ImageManagerStatic::make($file)
                    ->save(public_path('img/'. pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.jpg'));

            }
        }

        return redirect()->back();
    }
}
