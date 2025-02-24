@extends('layout')

@section('title', 'Edit student')

@section('content')
  <form action="{{ route('student.update', $student->id) }}" method="POST" class="container">
    @csrf
    @method('PUT')

    <a href="{{ route('student.index') }}">Go back</a>
    <h1>Update student</h1>

    @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}" placeholder="Your age">
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" aria-label="Default select example" id="gender" name="gender" required>
        <option selected>Your gender</option>
        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}" placeholder="Your address">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection