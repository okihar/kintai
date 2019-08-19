<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeIsWork($query){
      if($query->where('id','=',Auth::user()->id)->where('kinmu_flag','=','1')->count()>=1){
        return true;
      }
      return false;
    }

    public function scopeStartWork($query){
      $query->where('id','=',Auth::user()->id)->update(['kinmu_flag'=>1]);
    }

    public function scopeFinishWork($query){
      $query->where('id','=',Auth::user()->id)->update(['kinmu_flag'=>0]);
    }
}
