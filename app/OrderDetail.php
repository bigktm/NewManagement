<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'order_id', 'product_id', 'product_name','product_price','product_qty','order_total'
    ];
    protected $primaryKey = 'order_details_id';
 	protected $table = 'tbl_order_details';

 	public function product(){
 		return $this->belongsTo('App\Product','product_id');
 	}
 	public function order(){
 		return $this->belongsTo('App\Order','order_id');
 	}
}