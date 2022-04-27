<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    public function getAllStudents() {



    }

    public function createStudent(Request $request) {
        
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();

        return response()->json([
            "message" => "student record created"
        ], 201);

    }

    public function getStudent($id) {
        
    }

    public function uodateStudent(Request $request, $id) {
        
    }

    public function deleteStudent($id) {
        
    }






}
