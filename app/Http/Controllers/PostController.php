<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->toArray();
        return array_reverse($posts);
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
            'title' => 'required',
            'body' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = rand(5, 30) . "." . $imagePath->getClientOriginalExtension();

            $path = $request->file('file')->storeAs('uploads/posts', $imageName, 'public');

        }

        $this->img_name = $imageName;
        $this->img_path = 'public/'.$path;
        
        if(Post::create($request->only(['title', 'body', 'img_name', 'img_path']) + ['img_name' => $this->img_name, 'img_path' => $this->img_path])){

            return "Post has been created successfully!";
        }else {
            return "Post failed to create!";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function updatepost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = date('Ymd') . "." . $imagePath->getClientOriginalExtension();
            $input['image'] = $imageName;

            $post = Post::find($id);
            $path = "./" . $post->img_path;

            if (empty($post->img_path)) {
                $path = $request->file('file')->storeAs('uploads/posts', $imageName, 'public');
            }else {
                if (file_exists($path)) {
                    unlink($path);
                }
                
                $path = $request->file('file')->storeAs('uploads/posts', $imageName, 'public');
            }


        }else{

            unset($input['image']);

        }

        $post->img_name = $imageName;
        $post->img_path = 'public/'.$path;
        $post->update($input);

    

        return 'Photo updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $path = "./".$post->img_path;
        if(file_exists($path)){
            unlink($path);
        }
        $post->delete();

        return response()->json('Post deleted!');
    }
}
