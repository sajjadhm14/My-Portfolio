<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

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
}
