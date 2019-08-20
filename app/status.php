<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class Status extends Model
{
    protected $guarded = ['status_id','place'];

    public function scopeKinmu($query){
      if($query->where('kinmu_flag','=','1') != null){
      return $query->where('kinmu_flag','=','1');
    }
    return null;
    }

    public function scopeToday($query){
      return $query->where('updated_at','>=',Carbon::today());
    }

    public function scopeStartWork($query){
      $status = new Status;
      $status->user_id = Auth::user()->id;
      $status->kinmu_flag = 1;
      $status->place = "";
      $status->date = Carbon::today()->format('Y/m/d');
      $status->end_time = null;
      $status->begin_time = Carbon::now()->isoFormat('HH:mm:ss');
      //$form->id = $request->session()->get('user_id');
      $status->save();
      return $status;
    }

    public function scopeGetHistory($query,$id){
      return $query->where('user_id','=',$id)->get();
    }

}
