<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


 

class NewsController extends Controller
{
    public function allNews(){
        $news = News::latest()->get();
        return view('backend.news.allnews', compact('news'));
    }

    public function  addNews(){
        $category = Category::latest()->get();
        $adminuser = User::where('role', 'admin')->get();
        return view('backend.news.addnews', compact('category', 'adminuser'));
    }

    public function storeNews(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $imagePath = 'uploads/news/' . $name_gen;
        Storage::disk('public')->put($imagePath, file_get_contents($image));
        
        

        // Look up the category by category_name
       
         

        News::insert([
            
            'category_id' => $request->category_id,
            //'category_name' => $request->category_name,
            'user_id' => $request->user_id,
            'news_title' => $request->news_title,
            'news_title_slug' => strtolower(str_replace(' ', '-', $request->news_title)),
            'news_details' => $request->news_details,
            
            'tags' => $request->tags,
            'breaking_news' => $request->breaking_news,
            'top_slider' => $request->top_slider,
            'first_three' => $request->first_three,
            'first_nine' => $request->first_nine,

            'post_date' => date('Y-m-d H:i:s'),
            'post_month' => date('F'),
            'image' => $imagePath,
            'created_at' => now(),
            

        ]);
        return redirect()->route('all.news');

    }

    public function editNews($id){
        $news = News::findOrFail($id);
        $categories = Category::latest()->get();
        $adminuser = User::where('role', 'admin')->latest()->get();
        return view('backend.news.editnews', compact('news', 'categories', 'adminuser'));
    }

    public function updateNews(Request $request){
        $news_id = $request->id;

        if($request->file('image')){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $imagePath = 'uploads/news/' . $name_gen;
        Storage::disk('public')->put($imagePath, file_get_contents($image));
       // $category = Category::where('category_name', $categoryName)->first();

            
            News::findOrFail($news_id)->update([
                'category_id' => $request->category_id,
                //'category_name' => $request->category_name,
                'user_id' => $request->user_id,
                'news_title' => $request->news_title,
                'news_title_slug' => strtolower(str_replace(' ', '-', $request->news_title)),
                'news_details' => $request->news_details,
                
                'tags' => $request->tags,
                'breaking_news' => $request->breaking_news,
                'top_slider' => $request->top_slider,
                'first_three' => $request->first_three,
                'first_nine' => $request->first_nine,
    
                'post_date' => date('Y-m-d H:i:s'),
                'post_month' => date('F'),
                'image' => $imagePath,
                'updated_at' => Carbon::now(),
            ]);

        
        

        
        return redirect()->route('all.news', compact('news_id'));
    } else{
            News::findOrFail($news_id)->update([
                'category_id' => $request->category_id,
                 //'category_name' => $request->category_name,
                'user_id' => $request->user_id,
                'news_title' => $request->news_title,
                'news_title_slug' => strtolower(str_replace(' ', '-', $request->news_title)),
                'news_details' => $request->news_details,
                
                'tags' => $request->tags,
                'breaking_news' => $request->breaking_news,
                'top_slider' => $request->top_slider,
                'first_three' => $request->first_three,
                'first_nine' => $request->first_nine,

                'post_date' => date('Y-m-d H:i:s'),
                'post_month' => date('F'),
                
                'updated_at' => Carbon::now(),
            ]);

        return redirect()->route('all.news', compact('news_id'));

    }
    }

    public function deleteNews($id){
        News::findOrFail($id)->delete();
        return redirect()->back();
        
    }
}
