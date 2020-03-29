<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{

    //control the courses database
    public function PostInsertcourse(Request $request)
    {
        // Checks for validation of signin form

        $this->validate($request, [
            'quiz_name' => 'required| max:120',
            'quiz_code' => 'required| max:120',
            'quiz_desc' => 'required| max:120',
            'quiz_grade' => 'required| numeric|min:1|max:9',
            'quiz_time' => 'required| min:4',
        ]);

        // input sign in information
        $quiz_name = $request['quiz_name'];
        $quiz_code= $request['quiz_code'];
        $quiz_desc = $request['quiz_desc' ];
        $quiz_grade= $request['quiz_grade'];
        $quiz_time= $request['quiz_time'];

        $course = new Course();
        $course->quiz_name = $quiz_name;
        $course->quiz_code= $quiz_code;
        $course->quiz_desc = $quiz_desc;
        $course->quiz_grade= $quiz_grade;
        $course->quiz_time= $quiz_time;

        // $course-> save();

        if ($course->save()) {
            $message = 'Course successfully inserted!';
        }
        return redirect()->route('inputdata')->with(['message' => $message]);
    }
}

