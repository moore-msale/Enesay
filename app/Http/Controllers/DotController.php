<?php

namespace App\Http\Controllers;

use App\Build;
use App\Dot;
use App\Plan;
use Illuminate\Http\Request;

class DotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $plan = Plan::find($request->plan_id);
            $builds = $plan->builds;
            $dots = $builds->map(function ($item) {
                return $item->dots;
            })->collapse();

            $dots = $dots->each(function ($item) {
                return collect($item)->merge($item->build);
            });

            return response()->json($dots);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createdDots = collect();
        for ($i = 0; $i < $request->count; $i++) {
            $dot = new Dot();
            $dot->top = $request->top;
            $dot->left = $request->left;
            $dot->build_id = $request->build_id;
            $dot->save();

            $createdDots = $createdDots->push($dot);
        }

        if ($request->ajax()) {
            return response()->json($createdDots);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dot  $dot
     * @return \Illuminate\Http\Response
     */
    public function show(Dot $dot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dot  $dot
     * @return \Illuminate\Http\Response
     */
    public function edit(Dot $dot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dot  $dot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dot $dot)
    {
        $dot->top = $request->top;
        $dot->left = $request->left;
        $dot->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dot  $dot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dot $dot)
    {
        //
    }
}
