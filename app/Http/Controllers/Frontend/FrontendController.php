<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use App\Models\Category;
use App\Models\Comments;
use DateTime;
use Illuminate\Support\Facades\Session;


class FrontendController extends Controller
{
    public function home(){
        $category = Category::latest()->get();
        $news = News::latest()->get();
       
       //category-1
        $skip_cat_0 = Category::skip(0)->first();
        $skip_news_0 = News::where('status', 1)->where('category_id', $skip_cat_0->id)->orderBy('id', 'DESC')->limit(5)->get();

        //category-2
        $skip_cat_2 = Category::skip(2)->first();
        $skip_news_2 = News::where('status', 1)->where('category_id', $skip_cat_2->id)->orderBy('id', 'DESC')->limit(5)->get();

        //category-3
        $skip_cat_3 = Category::skip(3)->first();
        $skip_news_3 = News::where('status', 1)->where('category_id', $skip_cat_3->id)->orderBy('id', 'DESC')->limit(5)->get();

        //category-4
        $skip_cat_1 = Category::skip(1)->first();
        $skip_news_1 = News::where('status', 1)->where('category_id', $skip_cat_1->id)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.newshome', compact('news', 'category', 'skip_cat_0', 'skip_news_0', 'skip_cat_2', 'skip_news_2', 'skip_cat_3', 'skip_news_3', 'skip_cat_1', 'skip_news_1'));
    }
    

    
    public function CatWiseNews($id) {
        $category = Category::findOrFail($id);
        $news = News::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->get();
        return view('frontend.categorypage', compact('news', 'category'));
    }

    
    public function Details($id){
       
        
        $news = News::with('category')->findOrFail($id);
        $user = $news->user;

        $views = 'blog' . $news->id;
        if(!Session::has($views)){
            $news->increment('view_count');
            Session::put($views, 1);
        }

        $related_cat_id = $news->category_id;
        $related_news = News::where('category_id', $related_cat_id)->where('id', '!=', $id)->orderBy('id', 'DESC')->limit(6)->get();
        $comments = Comments::where('status', '1')->get();
        return view('frontend.newsdetails', compact('news', 'user', 'related_news'));
        
    }

    public function searchByDate(Request $request){
        $date = new DateTime($request->date);
        $dateFormat = $date->format('Y-m-d');
        $news = News::whereDate('post_date', $dateFormat)->latest()->get();
        return view('frontend.searchbydate', compact('news', 'dateFormat'));
    }
    
}
