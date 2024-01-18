<?php

namespace App\Http\Controllers;

use App\Models\bookCategories;
use App\Models\Books;
use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category($index){
        $categoryName=categories::find($index);
       $category = bookCategories::find($index)
                                ->where('category_id','=',$index)
                                ->leftJoin('books','books.id','=','book_categories.book_id')
                                ->get();
                                
       
        
        return view('CategoryPage',['category'=>$category,'categoryName'=>$categoryName]);
    }
    //
}
