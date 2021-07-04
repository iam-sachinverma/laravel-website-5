<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;
use Session;

class QueryController extends Controller
{
    public function querys(){
        Session::put('page','querys');
        $querys = Query::get()->toArray();
        //dd($querys); die;
        return view('admin.querys')->with(compact('querys'));
    }
}
