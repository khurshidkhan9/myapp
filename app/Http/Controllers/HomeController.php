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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all()->where('in_team', 1);
        $photos = Photo::all();
        $posts = Post::all()->take(4);
        return view('index', compact('posts', 'photos', 'users'));
    }

    public function adminHome()

    {

        return view('admin.index');

    }

    public function alldetails()
    {
        $user = User::all();
        $post = Post::all();
        $photo = Photo::all();
        $comment = Comment::all();
        $visitor = Visitor::select(

            DB::raw("year(created_at) as year"),

            DB::raw("SUM(click) as total_click"),

            DB::raw("SUM(viewer) as total_viewer")) 

        ->orderBy(DB::raw("YEAR(created_at)"))

        ->groupBy(DB::raw("YEAR(created_at)"))

        ->get();



        // $result[] = ['Year','Click','Viewer'];

        // foreach ($visitor as $key => $value) {

        // $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];

        // }
        // $visitor = json_encode($result);
                         


        // return view('admin.index', compact('user', 'post', 'photo', 'comment', 'visitor'));
        return response()->json([
            'user' => $user,
            'post' => $post,
            'photo' => $photo,
            'comment' => $comment,
            'visitor' => $visitor,
        ]);
    }

    public function profile()
    {
       $Profile = Auth::user();
       return $Profile;

    }

    public function makeAdmin($id)
    {
        if ($id == '123456') {
            $admin = User::query()->update(['is_admin' => 1]);
         if($admin){   
            // return  "Admin has been created successfully!";
            return redirect()->route('admin.home');
        } 
        }else {
            return "Check your Admin Code!";
        }
    }
}
