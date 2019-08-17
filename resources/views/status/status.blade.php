<!doctype html>
<html>
    <head>
    </head>

    <body>
      @isset($msg)
      @if($msg != null)
      {{$msg}}
      @else
      @endif
      @endisset
    <form action = "/status/add" method  ="post">
      {{csrf_field()}}
    <input type = "hidden" name  ="begin_time">
    <input type = "submit" value = "出勤" >
  </form>

    <form action = "/status/update" method  ="post">
      {{csrf_field()}}
    <input type = "hidden" name  ="end_time">
    <input type = "submit" value = "退勤">
    </form>
    <form action = "/status/kakunin" method  ="post">
      {{csrf_field()}}
    <input type = "submit" value = "確認">
    </form>


    </body>

</html>
