@extends('layouts.app')

@section('title','From')

@section('content')
 
 <div class="text-center mt-2"<h2>{{$header}}</h2></div>
 <br> 

<!-- เขียน Radio ได้ 3 แบบ
<!-- HTML  -->
<!-- <lable><input type="radio" name="gender" value="0">หญิง</label> 
<lable><input type="radio" name="gender" value="0">ชาย</label> 
<hr> -->

<!-- วน Loop -->
<!-- @foreach($genders as $gender)
<lable><input type="radio" name="gender" value="{{ $gender ['id']}}">{{ $gender['name'] }}</label>

@endforeach

<hr> -->

<!-- ฺBootstrap -->
 <!-- <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="genders">ชาย
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="genders">หญิง
  </label>
</div> -->
 

<form action="store" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> </br> 

    Username : <input type="text" name="username"> </br>
    Password : <input type="password" name="password"> </br>
    <input type="submit" value="submit">

</form>

@endsection