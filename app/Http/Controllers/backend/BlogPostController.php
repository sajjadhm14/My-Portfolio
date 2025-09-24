<?php

namespace App\Http\Controllers\backend;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogPostController extends Controller
{
    public function addPost()
    {
        return view ('backend.blog.add_post');
    }

    public function storePost(Request $request)
    {
        $file = $request->file('post_photo');
        $imageName = 'post_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver);
        $img = $manager->read($file);
        $img = $img->resize(409,368);
        $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/'.$imageName));
        $imagePath = 'uploads/blog/'.$imageName;

        $post = new BlogPost();
        $post->user_id = Auth::user()->id;
        $post->post_title = $request->post_title;
        $post->post_slug = strtolower(str_replace(' ', '-', $request->post_title));
        $post->photo = $imagePath;
        $post->post_tags = $request ->post_tags;
        $post->post_description = $request ->post_description;
        $post->save();

        $notification = [
            'message' => 'Blog Posted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()->route('all.post')->with($notification);
    }

    public function allPost()
    {
        $posts = BlogPost::latest()->get();
        return view('backend.blog.all_posts' , compact('posts'));
    }
    public function editPost($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('backend.blog.edit_post' , compact('post'));
    }

    public function updatePost(Request $request) 
    {
        if($request->hasFile('post_photo')){
            $file = $request->file('post_photo');
            $imageName = 'post_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver);
            $img = $manager->read($file);
            $img = $img->resize(409,368);
            $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/'.$imageName));
            $imagePath = 'uploads/blog/'.$imageName;

            $post =BlogPost::find($request->id);
            $post->user_id = Auth::user()->id;
            $post->post_title = $request->post_title;
            $post->post_slug = strtolower(str_replace(' ', '-', $request->post_title));
            $post->photo = $imagePath;
            $post->post_tags = $request ->post_tags;
            $post->post_description = $request ->post_description;
            $post->save();

            $notification = [
                'message' => 'Blog Updated Successfully!',
                'alert-type' => 'info',
            ];
            return redirect()->route('all.post')->with($notification);
        }
    }

    public function deletePost($id)
    {
        $oldPostPhoto = BlogPost::find($id);
        unlink($oldPostPhoto->photo);
        

        BlogPost::findOrFail($id)->delete();
        $notification = [
                'message' => 'Blog Deleted Successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->route('all.post')->with($notification);
    }
}
