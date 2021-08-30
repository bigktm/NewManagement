<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributesProductValue extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'attributes_value', 'attributes_qty', 'attributes_price'
    ];
    protected $primaryKey = 'attr_id';
    protected $table = 'tbl_attributes_value';

    public function attributes(){
 		return $this->belongTo('App\AttributesProduct');
 	}
}
