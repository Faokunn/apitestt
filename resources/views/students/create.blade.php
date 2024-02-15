@extends('students.layout')

@section('content')
<div class="card" style="margin: 20px;">
    <div class="card-header">
        Create New Student
    </div>
    <div class="card-body">
        <form action="{{ url('student') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" id="course" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</div>
@stop