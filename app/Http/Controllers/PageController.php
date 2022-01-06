<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Visitor;
use Auth;
use DB;
use Mail; 

class PageController extends Controller
{
    public function index()
    {
        $users = User::all()->where('in_team', 1);
        $photos = Photo::all();
        $posts = Post::all()->take(4);
        return view('index', compact('posts', 'photos', 'users'));
    }
}
