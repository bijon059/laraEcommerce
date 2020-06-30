<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    public function parent()
    {
        # code...
        return $this->belongsTo(Category::class,'parent_id');
    }


}
