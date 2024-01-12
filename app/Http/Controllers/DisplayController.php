<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //student side
    public function index()
    {
        return view('student.index');
    }
    public function batchStudent()
    {
        return view('student.batchStudent');
    }
    public function single()
    {
        return view('student.single');
    }
    public function subjectList()
    {
        return view('student.subjectList');
    }
    public function assign()
    {
        return view('student.assign');
    }
    public function syllabus()
    {
        return view('student.syllabus');
    }
    public function reminderStudent()
    {
        return view('student.reminders');
    }
    public function attendence()
    {
        return view('student.attendence');
    }
    public function courses()
    {
        return view('student.courses');
    }
    public function notify()
    {
        return view('student.notification');
    }
    public function profile()
    {
        return view('student.profile');
    }
    public function help()
    {
        return view('student.help');
    }
}
