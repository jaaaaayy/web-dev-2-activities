@extends('layout')

@section('title', 'Registration')

<form action="{{ url('/register') }}" method="POST">
  @csrf

  <h1>Register</h1>
  @if(session('success'))
    <div class="alert alert-success" role="alert">
      Student registration successful!
    </div>
  @endif
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control"  id="name" name="name"  placeholder="Enter name" required>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" required>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Gender</label>
    <select class="form-select" aria-label="Default select example" id="gender" name="gender" required>
      <option selected>Select gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>