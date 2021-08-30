<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributesProduct extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'attributes_name','product_id'
    ];
    protected $primaryKey = 'attributes_id';
    protected $table = 'tbl_product_attributes';

    public function product(){
 		return $this->hasMany('App\Product');
 	}
 	public function attributesValue(){
 		return $this->hasMany('App\AttributesProductValue');
 	}
}
