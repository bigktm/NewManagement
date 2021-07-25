<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function Index()
    {
        return view('admin.template.overview');
    }
    public function Orders()
    {
        return view('admin.template.orders.orders');
    }
    public function ViewOrders()
    {
        return view('admin.template.orders.view_order');
    }
    public function ProductList()
    {
        return view('admin.template.products.product_list');
    }
    public function AddProduct()
    {
        return view('admin.template.products.product_add_new');
    }
}
