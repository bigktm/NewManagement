<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'slider_id';
    protected $table = 'tbl_slider';

    public function category(){
    	return $this->belongsTo('App\CategoryProductModel','category_id', 'slider_id');
    }
}
