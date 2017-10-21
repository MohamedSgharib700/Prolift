<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    public function catalogus()
    {
    	return $this->belongsTo(Category_services::class);
    }
}
