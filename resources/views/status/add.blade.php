@extends('layouts.kintai')
<html>
<body>
  <form action = "/status" method  ="get">
  <input type = "submit" value = "戻る" >
  おはようございます。
  @section('table')
  <table>
    <tr><th>id</th>
      <th>日付</th>
      <th>出勤時刻</th>
    </tr>
    <tr>
      <td>{{$status->user_id}}</td>
      <td>{{$status->date}}</td>
      <td>{{$status->begin_time}}</td>
    </tr>
  </table>
  @endsection
</body>
</html>
