@extends('layouts.kintaiapp')
@section('title','管理者画面')
<!doctype html>
<html>
    <head>
    </head>
    <body>
    <form action = "/admin/today" method  ="post">
      {{csrf_field()}}
    <input type = "submit" value = "本日の勤怠" class = "submit"  >
    </form>
    <form action = "/status/update" method  ="post">
      {{csrf_field()}}
    <input type = "hidden" name  ="end_time">
    <input type = "submit" value = "勤務時間一覧"class = "submit" >
    </form>
    <form action = "/status/kakunin" method  ="post">
      {{csrf_field()}}
    <input type = "submit" value = "時間調整"class = "submit" >
    </form>
    </body>

</html>