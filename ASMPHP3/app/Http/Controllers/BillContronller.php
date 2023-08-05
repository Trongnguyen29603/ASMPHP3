<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillContronller extends Controller
{
   
    public function index(){
       $bill = DB::table('Bill')
       ->join('users','bill.id' ,'=','users.bill_id')
       ->select('bill.*','')
       ->get();
    }
}
