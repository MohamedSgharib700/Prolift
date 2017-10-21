<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $timestamps = false;

    
    
    protected $fillable = ['title','content','image','custom_url'];
}
