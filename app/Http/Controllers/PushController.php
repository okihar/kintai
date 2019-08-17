<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PushController extends Controller
{
    public function index(Request $request){
      $items = DB::select('select * from users');
      return view('push.push',['items'=>$items]);
    }

}
