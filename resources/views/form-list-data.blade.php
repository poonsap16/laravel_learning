@extends('layouts.app')

@section('title','From')

@section('content')


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">กลุ่มงาน</th>
      <th scope="col">ชื่อผู้ใช้งาน</th>
      <th scope="col">รายละเอียดงาน</th>
      <th scope="col">สถานะงาน</th>
    </tr>
  </thead>

  <tbody>
    @foreach($tasks as $task)
    <tr>    
        <th>{{ $task->id }}</th>
        <th>{{ $task->type }}</th>
        <th>{{ $task->name }}</th>
        <th>{{ $task->detail }}</th>
        <th>{{ $task->completed }}</th>                 
    </tr>
    @endforeach
  </tbody> 
</table>
</div>

@endsection