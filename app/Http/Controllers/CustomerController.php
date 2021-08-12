<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   	public function register() {
   		return view('site.customers.customer_register');
   	}
}
