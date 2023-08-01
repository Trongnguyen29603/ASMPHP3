<?php

namespace App\Http\Controllers;

use App\Http\Requests\Khoa_hocRequest;
use App\Models\Khoa_hoc;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Khoa_hocController extends Controller
{
    public function index(Request $request){

        $khoa_hoc = DB::table('category')
        ->join('khoa_hoc', 'category.id', '=', 'khoa_hoc.id_category')
        ->select('category.*','khoa_hoc.id as idkh','khoa_hoc.name as namekh','name_gv','price','describe','process','image')//mình sẽ lấy các trường mà mình mong muốn
        ->whereNull("khoa_hoc.deleted_at")
        ->get();
       return view("khoa_hoc.index",compact('khoa_hoc'));
    }
   
    public function add(Khoa_hocRequest $request){
        $categorys = DB::table('category')->get();
        if($request->post()){
            $params = $request->except('_token');
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $params['image']= uploadFile('hinh',$request->file('image'));
                
            }
    
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
        $category = DB::table('category')->get();
        if($request -> isMethod('POST')){
            $parmas = $request->except('_token');
            if($request->hasFile('image') && $request->file('image')->isValid()){
                //xóa ảnh cũ
                $resultDL= Storage::delete('/public'.$khoa_hocs->image);
                if($resultDL){
                    $params['image']= uploadFile('hinh',$request->file('image'));
                }
            }
            else{
                $params['image'] = $khoa_hocs->image;
            }
            Khoa_hoc::where('id',$id)
            ->update($parmas);
            if($request){
                Session::flash('success','sua thanh cong sv');
                return redirect()->route('route_khoa_hoc_edit',['id'=>$id]);
            }
        }
         return view('khoa_hoc.edit',compact('khoa_hocs','category'));
    }
    public function delete($id){
      
        Khoa_hoc::where('id',$id)->delete();
        Session::flash('success','xóa thanh công'.$id);
        return redirect()->route('route_khoa_hoc_index');
    }
}
