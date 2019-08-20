<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\User;

class AdminController extends Controller
{
  public function adminMenu (Request $request){
    return view('admin.adminMenu');
  }

  public function getTodayStatus(Request $request){
    $statuses = Status::kinmu()->get();
    return view('admin.today',['statuses'=>$statuses]);
  }

  public function getHistory(Request $request){
    $users = User::all();
    return view('admin.history',['users'=>$users]);
  }

  public function selectHistory(Request $request){
    $users = User::all();
    $statuses = Status::getHistory($request->id);
    return view('admin.history',['statuses'=>$statuses],['users'=>$users]);
  }
}
