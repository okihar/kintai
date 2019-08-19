<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Status;
use App\User;
use Carbon\Carbon;

class StatusController extends Controller
{
    public function index (Request $request){
      $user = Auth::user();
      return view('status.status',['user'=>$user]);
    }

    public function create(Request $request){
      if(User::isWork()){
        return view('status.status',['msg'=>'あなたは出勤済です']);
      }
      User::startWork();
      $status = Status::startWork();
      return view('status.add',['status'=>$status]);
    }

    public function add(Request $request){
      if(User::isWork()){
        return view('status.status');
      }
      $status = Status::today()->first();
      return view('status.add',['status'=>$status]);
    }

    public function update(Request $request){
      if(!User::isWork()){
        return view('status.status',['msg'=>'あなたは出勤していません']);
      }
      User::finishWork();
      $update = ['kinmu_flag'=>0,'end_time'=>Carbon::now()->isoFormat('HH:mm:ss'),];
      Status::query()->where('user_id',Auth::user()->id)->where('kinmu_flag','=','1')->update($update);
      $status = Status::today()->orderBy('begin_time','desc')->first();

      return view('status.update',['status'=>$status]);
    }

    public function kakunin (Request $request){
      $statuses = Status::getHistory();
      return view('status.kakunin',['statuses'=>$statuses]);
    }

}
