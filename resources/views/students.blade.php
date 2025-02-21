@extends('layout')

@section('title', 'Student list')

@section('content')
<div class="container">
  <h1>Student list</h1>
  <table class="table border">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
      <tr>
        <th scope="row">{{ $student -> id }}</th>
        <td>{{ $student -> name }}</td>
        <td>{{ $student -> age }}</td>
        <td>{{ $student -> gender }}</td>
        <td>{{ $student -> address }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection