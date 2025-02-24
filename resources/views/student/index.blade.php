@extends('layout')

@section('title', 'Student list')

@section('content')
  <main class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Student list</h1>
      <a href="{{ route('student.create') }}" class="btn btn-success">Add student</a>
    </div>
    <table class="table border">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($students as $student)     
            <tr>
              <th scope="row">{{ $student->id }}</th>
              <td>{{ $student->name }}</td>
              <td>{{ $student->age }}</td>
              <td>{{ $student->gender }}</td>
              <td>{{ $student->address }}</td> 
              <td>
                <a href={{ route('student.edit', $student) }} class="btn btn-warning">Edit</a>
                <button class="btn btn-danger">Delete</button>
              </td>  
            </tr>         
          @endforeach
      </tbody>
    </table>
  </main>
@endsection