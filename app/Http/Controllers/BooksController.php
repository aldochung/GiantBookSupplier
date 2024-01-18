<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
   public function book($index){
    $bookDetail = Books::find($index);
    $publisherData = Books::find($index)->connectPublisher;

    return view('BookDetail',['bookDetail'=>$bookDetail,'publisherData'=>$publisherData]);
   }
    //
}
