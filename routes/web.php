<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PublisherController;



Route::get('/HomePage',[HomePageController::class,'show']);

Route::get('/CategoryPage/{index}',[CategoriesController::class,'category']);

Route::get('/BookDetail/{index}',[BooksController::class,'book']);

Route::get('/PublisherDetail/{index}',[PublisherController::class,'publisher']);
Route:: get('/ContactPage', function(){
    return view('ContactPage');
});
