@extends('layouts.kintaiapp')

<html>
<body>
  <form action = "/admin" method  ="get">
  <input type = "submit" value = "戻る" >
  確認画面
</form>

　<form action = "./history" method  ="post">
      {{csrf_field()}}
      <select name = "id">
      @foreach($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
      @endforeach
    　</select>
    <input type = "submit" value = "選択">
  </form>
  @section('table')

  <table>
    <tr><th>id</th>
      <th>日付</th>
      <th>出勤時刻</th>
      <th>退勤時刻</th>
    </tr>
    @isset($statuses)
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
  @endisset
  @endsection
</body>
</html>
