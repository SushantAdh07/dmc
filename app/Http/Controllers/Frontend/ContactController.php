<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactPage(){
        return view('frontend.contact');
    }

    public function storeContact(Request $request){

        Contact::insert([
            'contactname' => $request-> contactname,
            'contactemail' => $request-> contactemail,
            'contacttext' => $request-> contacttext,
        ]);
        return redirect()->back()->with('message', 'Your message submitted');

    }

    public function showContact(){
        $contacts = Contact::latest()->get();
        return view('admin.Inbox', compact('contacts'));
    }
}
