<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  HomeSlider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  HomeSlider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSlider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  HomeSlider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  HomeSlider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSlider $slider)
    {
        //
    }
}
