@extends('layouts.app')

@section('title','From')

@section('content')


<form action="insert" method="post">
<div class = 'container'>
<h1>Form add data</h1>
<hr>
<input type="hidden" name="_token" value="{{ csrf_token() }}"> </br> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="type">Select type</label>
    <select class="form-control col-sm-4" id="type" name="type">
      <option value="0">click to choose</option>
      <option value="1">Computer</option>
      <option value="2">Software</option>
      <option value="3">Network</option>
    </select>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name</label>
    <input type="text" class="form-control col-sm-4" id="name" name="name">
  </div>
<div class="form-group">
  <label class="control-label col-sm-2" for="detail">Detail:</label>
  <textarea class="form-control col-sm-4" rows="5" id="detial" name="detial"></textarea>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


@endsection