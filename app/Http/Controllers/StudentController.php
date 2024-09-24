<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
            
        $student = [
            [
                "name" => "bob"
            ],
            [
                "name" => "maddy"
            ],
            [
                "name" => "baddy"
            ],
            [
                "name" => "chaddy"
            ]
            ];
            return view('students.index', compact('student'));
    }
}

