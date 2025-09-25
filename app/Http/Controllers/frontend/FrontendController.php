<?php

namespace App\Http\Controllers\frontend;

use App\Models\Comment;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function homepage()
    {
        return view ('frontend.homepage');
    }

    public function blogDetails($slug)
    {
        $post = BlogPost::where('post_slug' , $slug)->first();
        $rPosts = BlogPost::latest()->limit(3)->get();
        return view('frontend.blog.post_details', compact( 'post' , 'rPosts'));
    }

    public function storeComment(Request $request)
    {
        $comment = new Comment();
        $comment ->post_id = $request->post_id;
        $comment ->user_name = $request->user_name;
        $comment ->user_email = $request->user_email;
        $comment ->comment = $request->comment;
        $comment->save();
        $notification = [
                'message' => 'Comment Posted! Waiting For Approval',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
    }
}
