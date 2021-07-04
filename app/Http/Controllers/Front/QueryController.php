<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;

class QueryController extends Controller
{
    public function queryForm(Request $request){
        if($request->isMethod('post')){
         $data = $request->all();
         //echo "<pre>"; print_r($data); die;
         $query = new Query;
         $query->name = $data['query_name'];
         $query->phone = $data['query_phone'];
         $query->service = $data['query_service'];
         $query->save();

         return redirect()->back();
        }

        return view('front.index');
    }
}
