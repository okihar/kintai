<!doctype html>
<html>
    <head>
    </head>

    <body>
    <input type = "submit" value = "出勤">
    <input type = "submit" value = "退勤">
    @foreach($items as $item)
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    @endforeach
    </body>
</html>
