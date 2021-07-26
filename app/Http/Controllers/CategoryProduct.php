<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    public function AddCategory () {
    	return view('admin.template.category.add_category_product');
    }
    public function AllCategory () {
    	return view('admin.template.category.all_category_product');
    }
}
