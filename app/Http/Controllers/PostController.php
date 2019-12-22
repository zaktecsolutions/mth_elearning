<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // sends  the students post to the view
    public function getPost()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('students.frontend.studentpost', ['posts' => $posts]);
    }

    // Put the post in the database
    public function postCreatePost(Request $request)
    {
        //validation
        $this->validate($request, [
            'body' => 'required| max:1000',
        ]);
        $post = new Post();
        $post->body = $request['body'];
        // check if post was inserted in the database
        if ($request->user()->posts()->save($post));{
            $message = 'Post successfully created!';
        }
        return redirect()->route('post')->with(['message' => $message]);
    }
    // Deletes the post
    public function getDeletePost($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('post')->with(['message' => 'Successfully deleted!']);
    }
    public function postEditPost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $post = Post::find($request['postId']);
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new_body'=> $Post -> body],200);
    }
}
