<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $student = Student::count();
        $teacher = Teacher::count();
        $subjects = Subject::all();
        $teachers = Teacher::orderBy('name')->take(3)->get();
        $students = Student::orderBy('name')->take(3)->get();
        return view('pages.home', compact('subjects', 'teachers', 'students', 'student', 'teacher'));
    }
}
