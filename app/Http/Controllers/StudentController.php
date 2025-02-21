<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students', ['students' => $students]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric|max:2',
            'gender' => 'required|string',
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
}
