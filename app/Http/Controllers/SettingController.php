<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'site_title' => 'required',
            'site_url' => 'required',
            'site_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('site_logo')) {

            // file handling for logo
            $imagePath = $request->file('site_logo');
            $imageName = rand(5, 30) . "." . $imagePath->getClientOriginalExtension();

            $logo_path = $request->file('site_logo')->storeAs('uploads/settings/logo', $imageName, 'public');

            // file handling for video

            $videopath = $request->file('video');
            $videoname = rand(5, 30) . "." . $videopath->getClientOriginalExtension();

            $video_path = $request->file('video')->storeAs('uploads/settings/video', $videoname, 'public');

        }
        // file handling for logo

        $this->site_logo = $imageName;
        $this->logo_path = 'public/' . $logo_path;

        // file handling for video
        $this->video_name = $videoname;
        $this->video_path = 'public/' . $video_path;

        if (Setting::create($request->only([
            'site_title',
            'site_logo',
            'logo_path',
            'site_url',
            'address',
            'email',
            'phone',
            'facebooK',
            'google',
            'video_name',
            'video_path',
            'dow',
            'status',
            'start_time',
            'close_time',
        ]) + ['site_logo' => $this->site_logo, 'logo_path' => $this->logo_path, 'video_name' => $this->video_name, 'video_path' => $this->video_path])) {

            return "Settings created successfully!";
        } else {
            return "Settings failed to create!";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
