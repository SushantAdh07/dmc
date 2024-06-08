<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\News;
use App\Models\Category;


class AdminController extends Controller
{
    public function AdminDashboard(){
        $news = News::latest()->get();
        $categories = Category::latest()->get();
        $totalViews = News::sum('view_count');
        return view('admin.index', compact('news', 'categories', 'totalViews'));
    }

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $notifications = array(
            'message' => 'Successfully logged out',
            'alert-type' => 'success'
        );

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with($notifications);
    }

    public function allAdmins(){
        $admins = User::where('role', 'admin')->latest()->get();
        return view('admin.alladmins', compact('admins'));
    }

    public function addAdmin(){
        return view('admin.addadmin');
    }

    public function editAdmin($id){
        $admin = User::findOrFail($id);
        return view('admin.editadmin', compact('admin'));
    }

    public function updateAdmin(Request $request){
        $user = $request->id;

        User::findOrFail($user)->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        return redirect()->route('all.admins');
    }

    public function deleteAdmin($id){
        User::findOrFail($id)->delete();
        $notifications = array(
            'message' => 'Successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notifications);
    }
}
