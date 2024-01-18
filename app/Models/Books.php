<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
     protected $guarded = 'id';
     public $fillable = ['publisher_id','title','author','year','synopsis','image'];

//Relationship between Books,Publisher,Category
     public function connectPublisher(){
          return $this->belongsTo(publisher::class,'publisher_id');
     }
     
    
}
