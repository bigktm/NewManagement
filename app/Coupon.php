<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'coupon_code', 'coupon_type', 'coupon_desc', 'coupon_price', 'coupon_expiry' , 'coupon_status'
    ];
    protected $primaryKey = 'coupon_id';
    protected $table = 'tbl_coupon';
}
