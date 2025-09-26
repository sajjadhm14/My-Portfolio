<?php

namespace App\Http\Controllers\backend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use PHPUnit\Logging\OpenTestReporting\Status;

class CommentController extends Controller
{
    public function userComment()
    {
        $comments = Comment::all();

        return view ('backend.comment.comments' , compact('comments'));
    }
    public function commentStatusUpdate(Request $request)
    {
        $comment_id = $request->input('comment_id');
        $comment_status = $request->input('status' , 0);

        $comment = Comment::find($comment_id);
        if($comment){
            $comment->status = $comment_status;
            $comment->save();
        }
        return response()->json([
            'status' => 200
        ]);
    }

    public function contactMessage()
    {
        $contactMessages = Contact::latest()->get();
        return view ('backend.contact.all_contact_messages' , compact('contactMessages'));
    }

    public function deleteContact($id)
    {
        Contact::findOrFail($id)->delete();
        $notification = [
            'message'=> 'Contact Message Deleted Successfully' , 
            'alert-type' => 'success'
            ];
        return redirect()->back()->with($notification);
    }
}
