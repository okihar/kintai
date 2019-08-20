@extends('layouts.kintaiapp')
@extends('layouts.app')
@section('title','管理者画面')
<title>{{ config('app.name', 'Kintai') }}</title>
<!doctype html>
<html>
    <head>
    </head>
    <body>
    <form action = "/admin/today" method  ="post">
      {{csrf_field()}}
    <input type = "submit" value = "勤務中一覧" class = "submit"  >
    </form>
    <form action = "/admin/history" method  ="get">
      {{csrf_field()}}
    <input type = "submit" value = "勤務時間一覧"class = "submit" >
    </form>
    <form action = "/status/kakunin" method  ="post">
      {{csrf_field()}}
    <input type = "submit" value = "時間調整"class = "submit" >
    </form>
    </body>

</html>
