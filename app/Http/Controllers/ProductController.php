<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function AllProduct() {
    	return view('admin.template.products.all_product_list');
    }
    public function AddProduct()
    {
        return view('admin.template.products.product_add_new');
    }
}
