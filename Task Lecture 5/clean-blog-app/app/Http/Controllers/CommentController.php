<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{

    public function store(Request $request, Post $post)
    {

        // if (auth()->user()->role ==1){
        //     abort(403);
        // }
        Gate::authorize('add-comment');
        $request->validate([
            'comment' => 'required|max:500|min:3',
        ]);

        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->message = $request->input('comment');
        $comment->save();

        return back()->with('success', 'Comment inserted successfully');
    }

    public function destroy(Comment $comment)
    {
        Gate::authorize('delete-comment', $comment);
        $comment->delete();
        return back()->with('success', 'Comment deleted successfully');
    }
}
