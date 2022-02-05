<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Photos = Photo::all()->toArray();
        return array_reverse($Photos);
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
            // 'name' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('file')) {
            // $img = date('Ymd') . "." . $image->getClientOriginalExtension();
            $img = rand(5, 30) . "." . $image->getClientOriginalName();
            $path = $image->storeAs('uploads/photos', $img, 'public');

            $input['name'] = "$img";
            $input['photo'] = "$img";
            $input['photo_path'] = 'public/' . $path;
        } else {
            unset($input['file']);
        }
        photo::create($input);

        return response()->json(['success'=>'You have successfully upload Image.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);
        return response()->json($photo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function updatephoto(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = rand(5, 30) . "." . $imagePath->getClientOriginalExtension();
            $input['image'] = $imageName;

            $photo = Photo::find($id);
            $path = "./" . $photo->photo_path;

            if (empty($photo->photo_path)) {
                $path = $request->file('file')->storeAs('uploads/photos', $imageName, 'public');
            }else {
                if (file_exists($path)) {
                    unlink($path);
                }
                
                $path = $request->file('file')->storeAs('uploads/photos', $imageName, 'public');
            }


        }else{

            unset($input['image']);

        }

        $photo->photo = $imageName;
        $photo->photo_path = 'public/' . $path;

        $photo->update($input);

        return 'Photo updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $path = "./" . $photo->photo_path;
        if (file_exists($path)) {
            unlink($path);
        }
        $photo->delete();
        return response()->json('Photo deleted!');

    }
}
