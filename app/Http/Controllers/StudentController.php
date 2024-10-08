<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

class StudentController extends Controller
{
    public function showStudent()
    {
        $students = DB::table('students')->orderBy('id', 'desc')
            ->simplePaginate(2);
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

    public function addStudent(Request $request)
    {
        $students = DB::table('students')->insert([
            [
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'city' =>  $request->city

            ]

        ]);
        if ($students) {
            echo "Added Successfully";
        }
    }

    public function updateView(String $id)
    {
        $student = DB::table('students')->find($id);
        return view('update', ['data' => $student]);
    }

    public function updateStudent(Request $request, String $id)
    {
        $student = DB::table('students')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'city' =>  $request->city
        ]);
        if ($student) {
            echo "Updated SuccessFully";
        }
    }
}
