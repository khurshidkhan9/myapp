<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->toArray();
        return array_reverse($users);
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            $this->img_name = $imageName;
            $this->img_path = 'public/' . $path;
            if (User::create($request->all() + ['avatar' => $this->img_name, 'img_path' => $this->img_path])) {
                return true;
            }

        } else {
            if (User::create($request->all())) {
                return true;
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

            $user = User::find($id);
            $path = "./" . $user->img_path;

            if (empty($user->img_path)) {
                $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            } else {
                if (file_exists($path)) {
                    unlink($path);
                }

                $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            }

        }

        $this->img_name = $imageName;
        $this->img_path = 'public/' . $path;

        if (user::where('id', $id)->update($request->only(['name', 'email', 'email_verified_at', 'is_admin', 'in_team', 'position', 'password', 'avatar', 'img_path', 'phone', 'address']) + ['avatar' => $this->img_name, 'img_path' => $this->img_path])) {

            return "User has been Updated successfully!";
        } else {
            return "User Update failed to create!";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json('User deleted!');
    }
}
