<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(Request $request){
       $categorys = DB::table('category')
       ->select('id','name')
       ->get();
       return view('category.index',compact('categorys'));
    }
    public function add(CategoryRequest $request){
         if($request->post()){
            $params = $request->except('_token');
            $categorys = Category::create($params);
         
         if($categorys->id){
            Session::flash('success','theem moi thanh cong');
            return redirect()->route('route_category_add');
         }
      }
         return view('category.add');
    }
    public function edit(CategoryRequest $request,$id){
        $categorys = Category::find($id);
        if($request -> isMethod('POST')){
          Category::where('id',$id)
          ->update($request->except('_token'));
          if($request){
            Session::flash('success','sua thanh cong sv');
            return redirect()->route('route_category_edit',['id'=>$id]);
        }
        }
        return view('category.edit',compact('categorys'));
    }
}
