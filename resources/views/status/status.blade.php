@extends('layouts.kintaiapp')
@extends('layouts.app')
@section('title','メニュー画面')
<!doctype html>
<html>
    <head>
    </head>
    <body>
      @isset($user)
      {{$user->name}}さん、こんにちは
      @endisset
      @isset($msg)
      @if($msg != null)
      {{$msg}}
      @endif
      @endisset
    <form action = "/status/add" method  ="post">
      {{csrf_field()}}
    <input type = "hidden" name  ="begin_time">
    <input type = "submit" value = "出勤" class = "submit"  >
    </form>
    <form action = "/status/update" method  ="post">
      {{csrf_field()}}
    <input type = "hidden" name  ="end_time">
    <input type = "submit" value = "退勤"class = "submit" >
    </form>
    <form action = "/status/kakunin" method  ="post">
      {{csrf_field()}}
    <input type = "submit" value = "確認"class = "submit" >
    </form>
    <form action = "/admin" method  ="post">
      {{csrf_field()}}
    <input type = "submit" value = "管理者"class = "submit" >
    </form>
    </body>

</html>
