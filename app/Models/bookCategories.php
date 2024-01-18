<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookCategories extends Model
{
    protected $guarded = 'id';
    public $fillable = ['book_id','category_id'];

    

}
