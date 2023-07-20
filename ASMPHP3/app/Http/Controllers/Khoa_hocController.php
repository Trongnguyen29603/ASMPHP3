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
        DB::table('khoa_hoc')->whereNull("deleted_at")->get();
       return view("khoa_hoc.index",compact('khoa_hoc'));
    }
   
    public function add(Khoa_hocRequest $request){
        $categorys = DB::table('category')->get();
        if($request->post()){
            $params = $request->except('_token');
            $khoa_hoc = Khoa_hoc::create($params);
         
         if($khoa_hoc->id){
            Session::flash('success','theem moi thanh cong');
            return redirect()->route('route_khoa_hoc_add');
         }
      }
        return view('khoa_hoc.add',compact('categorys'));
    }
    public function edit(Khoa_hocRequest $request,$id){
        $khoa_hocs = Khoa_hoc::find($id);
       
        // $categorys = DB::table('category')
        // ->where('id',$id)
        // ->get();
        if($request -> isMethod('POST')){
          Khoa_hoc::where('id',$id)
          ->update($request->except('_token'));
          if($request){
            Session::flash('success','sua thanh cong sv');
            return redirect()->route('route_khoa_hoc_edit',['id'=>$id]);
        }
        }
        return view('khoa_hoc.edit',compact('khoa_hocs'));
    }
    public function delete($id){
      
        Khoa_hoc::where('id',$id)->delete();
        Session::flash('success','xóa thanh cong sv'.$id);
        return redirect()->route('route_khoa_hoc_index');
    }
}
