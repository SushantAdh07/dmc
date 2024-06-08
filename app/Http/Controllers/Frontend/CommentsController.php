<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function storeComments(Request $request){

        $news = $request->news_id;

        $request->validate([
            'commentator'=> 'required',
            'comments'=>'required',

        ]);

        Comments::insert([
            'news_id' => $news,
            'commentator'=> $request->commentator,
            'comments'=> $request->comments,
            'created_at'=> now(),
        ]);

        
        return redirect()->back()->with('message', 'Comments Added!');

    }

    
}
