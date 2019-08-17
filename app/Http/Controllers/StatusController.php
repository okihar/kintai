<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Status;
use Carbon\Carbon;

class StatusController extends Controller
{
    public function index (Request $request){
      $status = Status::all();
      return view('status.status',['status'=>$status]);
    }

    public function create(Request $request){
      if(Status::query()->where('kinmu_flag','=','1')->count()>= 1){
        return view('status.status',['msg'=>'あなたは出勤済です']);
      }
      $status = new Status;
      $status->user_id = Auth::user()->id;
      $status->kinmu_flag = 1;
      $status->place = "";
      $status->date = Carbon::today()->format('Y/m/d');
      $status->end_time = null;
      $status->begin_time = Carbon::now()->isoFormat('HH:mm:ss');
      //$form->id = $request->session()->get('user_id');
      $status->save();
      return view('status.add',['status'=>$status]);
    }

    public function add(Request $request){
      if(Status::query()->where('kinmu_flag','=','1') != null){
        return view('status.status');
      }
      $status = Status::today()->first();
      return view('status.add',['status'=>$status]);
    }

    public function update(Request $request){
      if(Status::query()->where('kinmu_flag','=','1')->count()== 0){
        return view('status.status',['msg'=>'あなたは出勤していません']);
      }
      $update = ['kinmu_flag'=>0,'end_time'=>Carbon::now()->isoFormat('HH:mm:ss'),];
      Status::query()->where('user_id',Auth::user()->id)->where('kinmu_flag','=','1')->update($update);
      $status = Status::today()->orderBy('begin_time','desc')->first();

      return view('status.update',['status'=>$status]);
    }

    public function kakunin (Request $request){
      $statuses = Status::all();
      return view('status.kakunin',['statuses'=>$statuses]);
    }
}
