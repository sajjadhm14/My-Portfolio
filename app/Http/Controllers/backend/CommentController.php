<?php

namespace App\Http\Controllers\backend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
