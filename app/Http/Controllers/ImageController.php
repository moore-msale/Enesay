<?php

namespace App\Http\Controllers;

use App\Image;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class ImageController extends Controller
{
    public function create(Request $request) {

        if ($request->ajax()) {
            $builds = Plan::find($request->plan_id)->builds;
            return response()->json($builds);
        }

        return view('plan.images', [
            'plans' => Plan::all()->where('active', 1),
        ]);
    }

    public function store(Request $request)
    {
        if (count($request->files)) {
            foreach ($request->images as $file) {
                $image = new Image();
                $fileName = 'images/'.uniqid('image_build_').'.png';

                $file = ImageManagerStatic::make($file);

                if ($file->width() > $file->height()) {
                    $file = $file->resize(1000, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                } else {
                    $file = $file->resize(null, 1000, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }

                $file = $file->stream('png', 50);

                Storage::disk('local')->put('public/'.$fileName, $file);

                $image->image = $fileName;
                $image->build_id = $request->build_id;
                $image->save();
            }
        }

        return redirect()->back();
    }
}
