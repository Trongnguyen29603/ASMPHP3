<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoahocClient extends Controller
{
    public function index(Request $request){
        $khoa_hoc = DB::table('khoa_hoc')->
        select('name','name_gv','price','describe','process','image')
        ->get();
        return view('templatesclient.nav',compact('khoa_hoc'));
    }
   
}
