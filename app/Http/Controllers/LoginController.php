<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
      $user = Auth::user();
      $sort = $request->sort;
      $items = Person::ordeBy($sort,'asc')->simplePagination(5);
      $param = ['items'=>$items,'sort'=>$sort,'user'=>$user];
      return view('')
    }
}
