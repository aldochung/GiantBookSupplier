<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    protected $guarded = 'id';
    public $fillable = ['name','address','phone','email','image'];

    
}
