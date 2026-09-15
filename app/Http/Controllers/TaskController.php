<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class TaskController extends Controller
{

    public function indexUsers()
    {
       $users = [
            1 => ['id' => 1, 'name' => 'salma ahmed', 'address' => 'tanta', 'age' => '19'],
            2 => ['id' => 2, 'name' => 'mayar mahmoud', 'address' => 'sadat', 'age' => '24'],
            3 => ['id' => 3, 'name' => 'yonis khaled', 'address' => 'Cairo', 'age' => '27'],
            4 => ['id' => 4, 'name' => 'aya khaled', 'address' => 'menia', 'age' => '20'],
        ];
        return view('tasks.users', compact('users'));
    }

  
    public function indexCourses()
    {
        $courses = [
            ['id' => 1, 'name' => 'Python Programming', 'hours' => '40 Hours', 'instructor' => 'Dr. Ahmed Samir'],
            ['id' => 2, 'name' => 'Artificial Intelligence', 'hours' => '60 Hours', 'instructor' => 'Dr. Mona Zaki'],
            ['id' => 3, 'name' => 'Cyber Security Basics', 'hours' => '35 Hours', 'instructor' => 'Dr. Tarek Youssef'],
            ['id' => 4, 'name' => 'Mobile App Development', 'hours' => '50 Hours', 'instructor' => 'Dr. Rania Hassan'],
        ];

        return view('tasks.courses', compact('courses'));
    }

   
    public function showCourse($id)
    {
        $courses = [
            1 => ['id' => 1, 'name' => 'Python Programming', 'hours' => '40 Hours', 'instructor' => 'Dr. Ahmed Samir'],
            2 => ['id' => 2, 'name' => 'Artificial Intelligence', 'hours' => '60 Hours', 'instructor' => 'Dr. Mona Zaki'],
            3 => ['id' => 3, 'name' => 'Cyber Security Basics', 'hours' => '35 Hours', 'instructor' => 'Dr. Tarek Youssef'],
            4 => ['id' => 4, 'name' => 'Mobile App Development', 'hours' => '50 Hours', 'instructor' => 'Dr. Rania Hassan'],
        ];

        $course = $courses[$id] ?? abort(404);
        return view('tasks.course_details', compact('course'));
    }

    public function showUser($id)
    {
        $users = [
            1 => ['id' => 1, 'name' => 'salma ahmed', 'address' => 'tanta', 'age' => '19'],
            2 => ['id' => 2, 'name' => 'mayar mahmoud', 'address' => 'sadat', 'age' => '24'],
            3 => ['id' => 3, 'name' => 'yonis khaled', 'address' => 'Cairo', 'age' => '27'],
            4 => ['id' => 4, 'name' => 'aya khaled', 'address' => 'menia', 'age' => '20'],
        ];

        $user = $users[$id] ?? abort(404);
        return view('tasks.user_details', compact('user'));
    }
}