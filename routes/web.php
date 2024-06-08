<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\OtherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\SendNewsController;
use App\Http\Controllers\Frontend\CommentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.index');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/socials', [OtherController::class, 'SocialMedia'])->name('socialmedia');
Route::post('/storeLink', [OtherController::class, 'addSocial'])->name('store.link');
Route::post('/storeytlink', [OtherController::class, 'addYoutube'])->name('store.ytlink');
Route::get('/deleteytlink/{id}', [OtherController::class, 'deleteYoutube'])->name('delete.youtube');
Route::get('/contacts', [ContactController::class, 'showContact'])->name('show.contacts');
Route::get('/sentnews', [SendNewsController::class, 'showSentNews'])->name('sent.news');
Route::get('/delete-sent-news/{id}',[SendNewsController::class, 'deleteSentNews'])->name('delete.sent-news');
Route::get('/comments', [OtherController::class, 'showComments'])->name('comments');
Route::get('/delete-comment/{id}', [OtherController::class, 'deleteComments'])->name('delete.comments');
});


Route::controller(ContactController::class)->group(function(){
Route::get('/contact-us', 'contactPage')->name('contact');
Route::post('/store-contact', 'storeContact')->name('store.contact');
});


Route::controller(SendNewsController::class)->group(function(){
    Route::get('/send-news', 'sendNews');
    Route::post('/store-sendnews', 'storeSendNews')->name('store.sendnews');
});

Route::post('/comments-store', [CommentsController::class, 'storeComments'])->name('store.comments');
Route::get('/comments-approve/{id}', [OtherController::class, 'approveComments'])->name('approve.comments');


Route::middleware(['auth', 'role:admin'])->group(function(){
Route::controller(CategoryController::class)->group(function(){
    Route::get('/all/categories', 'allCategory')->name('all.category');
    Route::get('/add/categories', 'addCategory')->name('add.category');
    Route::post('/store/categories', 'storeCategory')->name('store.category');
    Route::put('/update/categories/{id}', 'updateCategory')->name('update.category');
    Route::get('/edit/categories/{id}', 'editCategory')->name('edit.category');
    Route::get('/delete/categories/{id}', 'deleteCategory')->name('delete.category');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/alladmins', 'allAdmins')->name('all.admins');
    Route::get('/addadmin', 'addAdmin')->name('add.admin');
    Route::get('/edit-admin/{id}', 'editAdmin')->name('edit.admin');
    Route::put('/update-admin/{id}', 'updateAdmin')->name('update.admin');
    Route::get('/delete-admin/{id}', 'deleteAdmin')->name('delete.admin');
});

//News Post routes in admin dasahboard
Route::controller(NewsController::class)->group(function(){
    Route::get('/all/news', 'allNews')->name('all.news');
    Route::get('/add/news', 'addNews')->name('add.news');
    Route::post('/store/news', 'storeNews')->name('store.news');
    Route::get('/edit/news/{id}', 'editNews')->name('edit.news');
    Route::put('/update/news/{id}', 'updateNews')->name('update.news');
    Route::get('/delete/news/{id}', 'deleteNews')->name('delete.news');
});    
});

//for users
Route::get('/', [FrontendController::class, 'home']);
Route::get('/news/category/{id}', [FrontendController::class, 'CatWiseNews'])->name('category.page');
Route::get('/news-details/{id}', [FrontendController::class, 'Details'])->name('details');
Route::post('/searchbydate', [FrontendController::class, 'searchByDate'])->name('search-by-date');
Route::get('/logout', [UserController::class, 'userLogout'])->name('user.logout');


require __DIR__.'/auth.php';
