<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{
    public function allCategory(){
        $categories = Category::withCount('news')->get();
        return view('backend.category.allcategory', compact('categories'));
    }

    public function addCategory(){
        return view('backend.category.addcategory');
    }

    public function storeCategory(Request $request){
        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);
        return redirect()->route('all.category');
    }

    public function editCategory($id){
        $category = Category::findOrFail($id);

        return view('backend.category.editcategory', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $category = Category::findOrFail($id);

        $category->category_name = $request->input('category_name');
        $category->save();
        
        return redirect()->route('all.category',compact('category'));
    }

    public function deleteCategory($id){
        Category::findOrFail($id)->delete();
        return redirect()->back();
    }

}
