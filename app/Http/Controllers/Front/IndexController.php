<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    public function index(){
    	$page_name = "index";
    	return view('front.index')->with(compact('page_name'));
    }
}