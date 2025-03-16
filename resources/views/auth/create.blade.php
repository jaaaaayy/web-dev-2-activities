@extends('layout')

@section('title', 'Register')

@section('content')
  <div class="d-flex justify-content-center mt-5">
    <div class="d-flex justify-content-center container">
      <form action="{{ route('auth.store') }}" class="border p-3" method="POST" style="width: 400px">
        @csrf

        <h1>Register</h1>

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
        </div>

        <button class="btn btn-primary mb-3 w-100">Register</button>
        <p class="text-center">Already have an account? <a href="{{ route('auth.index') }}"
            class="link-offset-2">Login</a>
        </p>
      </form>
    </div>
  </div>
@endsection
