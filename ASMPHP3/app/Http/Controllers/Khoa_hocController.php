<?php

namespace App\Http\Controllers;

use App\Http\Requests\Khoa_hocRequest;
use App\Models\Khoa_hoc;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Khoa_hocController extends Controller
{
    public function index(Request $request){
        $khoa_hoc = DB::table('category')
        ->join('khoa_hoc', 'category.id', '=', 'khoa_hoc.id_category')
        ->select('category.*','khoa_hoc.id as idkh','khoa_hoc.name as namekh','price','describe','process')//mình sẽ lấy các trường mà mình mong muốn
        ->get();

       return view("khoa_hoc.index",compact('khoa_hoc'));
    }
   
    public function add(Khoa_hocRequest $request){
        $categorys = DB::table('category')->get();
        if($request->post()){
            $params = $request->except('_token');
            $khoa_hoc = Khoa_hoc::create($params);
         
         if($khoa_hoc->id){
            Session::flash('success','theem moi thanh cong');
            return redirect()->route('route_category_add');
         }
      }
        return view('khoa_hoc.add',compact('categorys'));
    }
    public function edit(Request $request){
        
    }
}
