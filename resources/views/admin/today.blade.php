@extends('layouts.kintaiapp')
<html>
<body>
  <form action = "/admin" method  ="get">
  <input type = "submit" value = "戻る" >
  @isset($statuses)
  @section('table')
  <table>
    <tr><th>id</th>
      <th>日付</th>
      <th>出勤時刻</th>
      <th>退勤時刻</th>
    </tr>
    @foreach($statuses as $status)
    <tr>
      <td>{{$status->user_id}}</td>
      <td>{{$status->date}}</td>
      <td>{{$status->begin_time}}</td>
      @if($status->kinmu_flag != 1)
      <td>{{$status->end_time}}</td>
      @endif
    </tr>
    @endforeach
  </table>
  @endsection
  @endisset
</body>
</html>
