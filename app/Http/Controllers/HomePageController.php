<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function show(){
        $bookList = Books::all();
        return view('HomePage',['bookList'=>$bookList]);
    }
    //
}
