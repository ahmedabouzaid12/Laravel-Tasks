<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user')->orderBy('id','DESC')->paginate(10);
        return view('front.posts.index',compact('posts'));
    }

    public function show(Post $post){
        $post->load('comments.user');
        return view('front.posts.show',compact('post'));
    }

    public function create(){
        return view('front.posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' =>['required','string','min:5'],
            'content' =>['required','string','min:10','max:1000'],
            'image' =>['required','image','mimes:png,jpg,jpeg,gif,webp']
        ]);
        if($request->hasFile('image')){
            $request->file('image')->store('public');
        }
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image->hashName();
        $post->save();
        return back()->with('success','Poast added successfully');
    }
        //$image = $request->hasFile('image');
}
