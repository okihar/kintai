<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class status extends Model
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
}
