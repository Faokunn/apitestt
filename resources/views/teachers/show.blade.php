@extends('teachers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Age : {{ $teachers->age }}</p>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Department : {{ $teachers->department}}</p>
  </div>
    </hr>
  </div>
</div>