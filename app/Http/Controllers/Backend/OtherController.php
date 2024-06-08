<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Socials;
use App\Models\Comments;
use App\Models\User;
use App\Models\Youtube;


class OtherController extends Controller
{
    
    
    public function SocialMedia(){
        $socials = Socials::all();
        return view('backend.socialmedia', compact('socials'));
    }

    public function addSocial(Request $request){
        Socials::insert([
            'socials' => $request->socials,
        ]);
        return redirect()->back();
    }


    public function addYoutube(Request $request){
        Youtube::insert([
            'ytlink' => $request->ytlink,
        ]);
        return redirect()->back();
    }

    public function deleteYoutube($id){
        Youtube::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function showComments(){
        $comments = Comments::with('news')->get();
        return view('admin.comments', compact('comments'));
    }

    public function approveComments($id){
        $approved = Comments::where('id', $id)->update(['status' => 1]);
        return redirect()->back();
    }

    public function deleteComments($id){
        Comments::findOrFail($id)->delete();
        
        $notifications = array(
            'message' => 'Comments Deleted!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notifications);
    }
}
