<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'brand_image', 'brand_slug', 'brand_desc', 'brand_status', 'brand_logo'
    ];
    protected $primaryKey = 'brand_id';
    protected $table = 'tbl_brand';

    public function product(){
 		return $this->hasMany('App\Product');
 	}
}
