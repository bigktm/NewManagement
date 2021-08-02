<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'gallery_image', 'product_id'
    ];
    protected $primaryKey = 'gallery_id';
    protected $table = 'tbl_gallery';

    public function product(){
        return $this->belongsTo('App\ProductModel');
    }
}
