<?php

namespace App\Http\Controllers;
use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    //

    public function PostInsertLesson(Request $request)
    {
        // Checks for validation of signin form

        $this->validate($request, [
            'lesson_title' => 'required| max:120',
            'lesson_code' => 'required| max:120',
            'lesson_obj' => 'required| max:120',
            'lesson_ws' => 'required| max:120',
            'lesson_body' => 'required| max:120',
            'lesson_grade' => 'required| numeric|min:1|max:9',
        ]);

        // input sign in information
        $lesson_title = $request['lesson_title'];
        $lesson_code= $request['lesson_code'];
        $lesson_obj = $request['lesson_obj'];
        $lesson_ws= $request['lesson_ws'];
        $lesson_body = $request['lesson_body'];
        $lesson_grade= $request['lesson_grade'];

        $lesson = new Lesson();
        $lesson->lesson_title = $lesson_title;
        $lesson->lesson_code= $lesson_code;
        $lesson->lesson_obj = $lesson_obj;
        $lesson->lesson_ws  = $lesson_ws;
        $lesson->lesson_body = $lesson_body;
        $lesson->lesson_grade = $lesson_grade;

        // $course-> save();

        if ($lesson->save()) {
            $message = 'Lesson successfully inserted!';
        }
        return redirect()->route('inputdata')->with(['message' => $message]);
    }
}
