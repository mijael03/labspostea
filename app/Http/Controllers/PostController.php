<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(10);
        return view ('index',compact('posts'));
    }
    public function today(){
        $today=date("Y-n-j H:m:s");
        $yesterday=date("Y-n-j H:m:s",strtotime($today."- 1 days"));
        $posts=Post::where('created_at','>',$yesterday)->get();
        return view('today',compact('posts'));
    }
    public function show($id){
        $resultado= Post::find($id);
        return view('postUnico',['post' => $resultado]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'title'=>'required:max:120',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'content'=>'required:max:2200',
        ]);
        $imageName= $request->file('image')->store(
            'posts/ '. Auth::id(),
            'public'
        );
        $title=$request->get('title');
        $content=$request->get('content');

        $post= $request->user()->posts()->create([
            'title'=>$title,
            'image'=>$imageName,
            'content'=>$content,
        ]);

        return redirect()->route('post', ['id'=> $post->id]);
    }
    
}
