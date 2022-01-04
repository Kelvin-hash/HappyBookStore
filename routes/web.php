<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BookController::class,'index']);

Route::get('/book/{book:title}', [BookController::class,'show']);

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/category/{category:category}', function (Category $category) {
    return view('categories',[
        'title' => $category->title,
        'book' => $category->books,
        'category' => $category->category
    ]);
});
