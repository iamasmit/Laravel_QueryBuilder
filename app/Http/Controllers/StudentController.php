<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent()
    {
        $students = DB::table('students')->orderBy('id', 'desc')->get();
        // return $students;

        // dump($students);

        // foreach ($students as $user) {
        //     echo $user->name;
        //     echo "<br>";
        // }
        //
        return view('allstudent', ['data' => $students]);
    }

    // It will show single student by ID
    public function singleStudent(string $id)
    {
        $student = DB::table('students')->where('id', $id)->get();
        return view('view', ['data' => $student]);
    }

    public function deleteStudent(string $id)
    {
        $student = DB::table('students')->where('id', $id)->delete();
        if ($student) {
            return redirect('allstudent');
        }
    }

    public function addStudent()
    {
        $students = DB::table('students')->insert([
            [
                'name' => 'Hari',
                'email' => 'hari@gmail.com',
                'age' => 30,
                'city' =>  'Kathmandu',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'name' => 'Ram',
                'email' => 'ram@gmail.com',
                'age' => 20,
                'city' =>  'Biratnagar',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
        if ($students) {
            echo "Added Successfully";
        }
    }

    public function updateStudent()
    {
        $student = DB::table('students')->where('id', 4)->update([
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if ($student) {
            echo "Updated SuccessFully";
        }
    }
}
