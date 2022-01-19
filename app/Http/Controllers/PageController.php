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
        $date = new \DateTime;

        $check_if_exists = DB::table('visitors')->where('ip', $_SERVER['REMOTE_ADDR'])->first();
        
        $get_visit_day = DB::table('visitors')->select('created_at')->where('ip', $_SERVER['REMOTE_ADDR'])->first();
        
        // $value = date_create($get_visit_day->created_at);
        
        if(!$check_if_exists)
        {
        
            DB::table('visitors')->insert(array('click' => '1', 'viewer' => '1', 'ip' => $_SERVER['REMOTE_ADDR'], 'created_at' => $date));
        
        }else{
        
            DB::table('visitors')->where('ip', $_SERVER['REMOTE_ADDR'])->increment('click');
        }



        $users = User::all()->where('in_team', 1);
        $photos = Photo::all();
        $posts = Post::all()->take(8);
        return view('index', compact('posts', 'photos', 'users'));
    }

    public function showblog($id)
    {
        $post = Post::where('id', $id)->get();
        return view('blog-details', compact('post'));
    }
}
