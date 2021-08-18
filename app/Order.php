<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'shipping_id', 'order_status','order_code','order_total','order_date','created_at'
    ];
    protected $primaryKey = 'order_id';
 	protected $table = 'tbl_order';

 	public function order_detail(){
 		return $this->hasMany('App\OrderDetail','order_id');
 	}
}

