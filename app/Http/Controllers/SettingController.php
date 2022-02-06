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
        $Setting = Setting::all()->toArray();
        return $Setting;
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
            'site_url' => 'url',
            'site_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('site_logo')) {

            $video_name = '';
            $video_path = '';
            // file handling for logo
            $image_Path = $request->file('site_logo');
            $imageName = rand(5, 30) . "." . $image_Path->getClientOriginalExtension();

            $logo_path = $request->file('site_logo')->storeAs('uploads/settings/logo', $imageName, 'public');
              // file handling for logo
            
              $this->site_logo = $imageName;
              $this->logo_path = 'public/' . $logo_path;

            // file handling for video
            if ($request->file('video')) {
                # code...
                $videopath = $request->file('video');
                $videoname = rand(5, 30) . "." . $videopath->getClientOriginalExtension();
                
                $video_path = $request->file('video')->storeAs('uploads/settings/video', $videoname, 'public');
                // file handling for video
                $this->video_name = $videoname;
                $this->video_path = 'public/' . $video_path;
            }

          
            

            Setting::create($request->only([
                'site_title',
                'site_logo',
                'logo_path',
                'site_url',
                'Paypal-key',
                'stirpe-key',
                'stirpe-secret-key',
                'address',
                'email',
                'phone',
                'facebooK',
                'google',
                'video_name',
                'video_path',
                'dow',
                'Payment-mt',
                'status',
                'start_time',
                'close_time',
            ]) + ['site_logo' => $this->site_logo, 'logo_path' => $this->logo_path, 'video_name' => $video_name, 'video_path' => $video_path]);
            return "Settings created with Images successfully!";
        } else {
            Setting::create($request->all());

                return "Settings created successfully!";
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
