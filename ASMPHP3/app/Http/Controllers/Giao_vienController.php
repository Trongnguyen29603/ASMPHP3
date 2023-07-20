<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giao_vienController extends Controller
{
    public function index(Request $request){
         
    }
    public function add(Request $request){
        if($request->post()){
            $pramas = $request->except('_token');
            $giaoviens = giao_vien::create($pramas);
        }
    }
    public function edit(Request $request){
        
    }
}
