<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';
    protected $fillable = ['name','email','phone','message','select'];
    public $timestamps = false;
}
