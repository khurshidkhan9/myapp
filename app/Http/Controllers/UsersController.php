<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            $imageName = rand(5, 30) . "." . $imagePath->getClientOriginalName();
            $path = $request->file('file')->storeAs('uploads/users', $imageName, 'public');
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
            $imageName = rand(5, 30) . "." . $imagePath->getClientOriginalName();

            $user = User::find($id);
            $path = "./" . $user->img_path;

            if (empty($user->img_path)) {
                $path = $request->file('file')->storeAs('uploads/users', $imageName, 'public');
            } else {
                if (file_exists($path)) {
                    unlink($path);
                }

                $path = $request->file('file')->storeAs('uploads/users', $imageName, 'public');
            }

            $img_name = $imageName;
            $img_path = 'public/' . $path;
            user::where('id', $id)->update($request->only(['name', 'email', 'email_verified_at', 'is_admin', 'in_team', 'position', 'avatar', 'img_path', 'phone', 'address']) + ['avatar' => $img_name, 'img_path' => $img_path]);
            return "User has been Updated with image successfully!";
        } else {

            user::where('id', $id)->update($request->all());
            return "User has been Updated successfully!";

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
        $path = "./" . $user->img_path;
        if (file_exists($path)) {
            unlink($path);
        }
        $user->delete();

        return response()->json('User deleted!');
    }
}
