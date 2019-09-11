<?php

namespace App\Http\Controllers;

use App\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function imagesAjax(Request $request)
    {
        $build = Build::find($request->build_id);

        $images = [];

        if ($build) {
            foreach ($build->images as $image) {
                $images[] = ['src' => '/storage/'.$image->image];
            }
        }

        return response()->json($images);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $build = new Build();
        $build->plan_id = $request->plan_id;
        $build->title = $request->title;
        $build->color = $request->color;
        $build->save();

        if ($request->ajax()) {
            return response()->json($build);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function show(Build $build)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function edit(Build $build)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Build $build)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function destroy(Build $build)
    {
        //
    }
}
