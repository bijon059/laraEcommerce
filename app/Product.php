<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function images()
    {
    	# code...
    	return $this->hasMany('App\ProductImage');
    }
}
