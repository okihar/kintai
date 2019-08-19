<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class AdminController extends Controller
{
  public function adminMenu (Request $request){
    return view('admin.adminMenu');
  }

  public function getTodayStatus(Request $request){
    $statuses = Status::kinmu()->get();
    return view('admin.today',['statuses'=>$statuses]);
  }
}
