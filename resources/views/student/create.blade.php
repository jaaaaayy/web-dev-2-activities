@extends('layout')

@section('title', 'Create student')

@section('content')
  <form action="{{ route('students.store') }}" method="POST" class="container">
    @csrf
    @method('POST')

    <a href="{{ route('students.index') }}">Go back</a>
    <h1>Add student</h1>

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="number" class="form-control" id="age" name="age" placeholder="Your age">
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" aria-label="Default select example" id="gender" name="gender" required>
        <option selected>Your gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Your address">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
@endsection
