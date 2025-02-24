<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
<<<<<<< HEAD
        return view('students', ['students' => $students]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric|max:2',
            'gender' => 'required|string',
=======
        return view('student.index', ['students' => $students]);
    }

    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric|max:60',
            'gender' => 'required|in:male,female',
>>>>>>> d6ec1b1 (Activity 3: Unfinish)
            'address' => 'required|string',
        ]);

        Student::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Student added successfully!');
    }
<<<<<<< HEAD
=======

    public function edit(Student $student)
    {
        return view('student.edit', ['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric|max:60',
            'gender' => 'required|in:male,female',
            'address' => 'required|string',
        ]);

        $student->update($validated);

        return redirect()->back()->with('success', 'Student updated successfully!');
    }
>>>>>>> d6ec1b1 (Activity 3: Unfinish)
}
