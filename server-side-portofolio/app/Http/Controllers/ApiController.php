<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ApiController extends Controller
{
    function getComment($id = null)
    {
        return $id?Comment::find($id):Comment::all();
    }
    
    function postComment(Request $request)
    {
        $comment = new Comment;
        $comment->username = $request->username;
        $comment->comment = $request->comment;
        $comment->save();
        if ($comment->id) {
            return $comment;
        }
        // return $comment;
    }
}
