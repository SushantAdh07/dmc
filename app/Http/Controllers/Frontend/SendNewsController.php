<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sendnews;
use Illuminate\Support\Facades\Storage;


class SendNewsController extends Controller
{
    public function sendNews(){
        return view('frontend.sendnews');
    }

    public function storeSendNews(Request $request){

        $senderimage = $request->file('senderimage');
        $name_gen = hexdec(uniqid()) . '.' . $senderimage->getClientOriginalExtension();
        $senderimagePath = 'uploads/news/' . $name_gen;
        Storage::disk('public')->put($senderimagePath, file_get_contents($senderimage));

        Sendnews::insert([
            'send_news_title'=> $request-> send_news_title,
            'send_news_details'=> $request-> send_news_details,
            'sendername'=> $request-> sendername,
            'senderemail'=> $request-> senderemail,
            'senderimage'=> $senderimagePath,
            
        ]);
        return redirect()->back();
    }

    public function showSentNews(){
        $sentnews = Sendnews::latest()->get();
        return view('admin.sentnews', compact('sentnews'));
    }

    public function deleteSentNews($id){
        Sendnews::findOrFail($id)->delete();
        $notifications = array (
            'message' => 'Deleted',
            'alert' => 'success'
        );
        return redirect()->back()->with($notifications);
    }
}
