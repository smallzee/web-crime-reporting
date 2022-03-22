<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporting extends Model
{
    //
    protected $table ="reporting";
    protected $guarded = [];

    function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
