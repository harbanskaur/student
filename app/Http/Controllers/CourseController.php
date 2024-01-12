<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function html()
    {
        return view('student.courses.html');
    }
    public function css()
    {
        return view('student.courses.css');
    }
    public function js()
    {
        return view('student.courses.js');
    }
    public function jquery()
    {
        return view('student.courses.jquery');
    }
    public function c()
    {
        return view('student.courses.c');
    }
    public function php()
    {
        return view('student.courses.php');
    }
    public function laravel()
    {
        return view('student.courses.laravel');
    }
    public function mysql()
    {
        return view('student.courses.mysql');
    }
    public function git()
    {
        return view('student.courses.git');
    }
    public function ajax()
    {
        return view('student.courses.ajax');
    }
    public function desc()
    {
        return view('student.courses.desc');
    }
    public function next()
    {
        return view('student.courses.next');
    }
}
