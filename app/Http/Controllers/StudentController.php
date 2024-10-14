<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Redis;

class StudentController extends Controller
{
    public function index() {
        $students = Student::paginate(10);
        return view('students.index', compact('students'));
    }
    public function destroy(Student $student) {
        $student -> delete();
        return redirect()->back();
    }
    public function store(Request $request, Student $student) {
        $data = $request -> validate([
            'fname'=>'string',
            'lname'=>'string',
            'age'=>'integer',
        ]);
        $student->create($data);
        return redirect()->back();
    }
    public function showww(Student $student) {
        
        return view('students.showww', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request -> validate([
            'fname'=>'string',
            'lname'=>'string',
            'age'=>'integer',
        ]);
        $student->update($data);
        return redirect()->back();
    }
}
