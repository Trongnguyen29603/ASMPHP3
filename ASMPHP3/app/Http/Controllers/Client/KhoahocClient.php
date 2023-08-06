<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Khoa_hoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoahocClient extends Controller
{
    public function index(Request $request){
        $khoa_hoc = DB::table('khoa_hoc')
        ->select('id','name','name_gv','price','describe','process','image')
        ->get();
        return view('templatesclient.nav',compact('khoa_hoc'));
    }
    public function detail(Request $request,$id){
        $khoahoc = Khoa_hoc::find($id);
        
        return view('billclient.bill',compact('khoahoc'));
    }
    public function addbill(Request $request){
        
      
    
    }
   
}
