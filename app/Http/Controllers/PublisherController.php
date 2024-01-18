<?php

namespace App\Http\Controllers;

use App\Models\bookCategories;
use App\Models\Books;
use App\Models\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisher($index){
        $publisherData = publisher::find($index);
        $publisherBook = Books::find($index)
                            ->where('publisher_id','=',$index)
                            ->leftJoin('publishers','publishers.id','=','books.publisher_id')
                            ->get();
                            
                            
        return view('PublisherDetail',['publisherData'=>$publisherData,'publisherBook'=>$publisherBook]);

    }
    //
}
