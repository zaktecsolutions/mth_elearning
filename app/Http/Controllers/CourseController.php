<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //control the courses database
    public function PostInsertcourse(Request $request)
    {
        // Checks for validation of signin form

        $this->validate($request, [
            'course_name' => 'required| max:120',
            'course_code' => 'required| max:120',
            'course_desc' => 'required| max:120',
            'course_grade' => 'required| numeric|min:1|max:9',
            'course_image' => 'required| min:4',
        ]);

        // input sign in information
        $course_name = $request['course_name'];
        $course_code = $request['course_code'];
        $course_desc = $request['course_desc'];
        $course_grade = $request['course_grade'];
        $course_image = $request['course_image'];

        $course = new Course();
        $course->course_name = $course_name;
        $course->course_code = $course_code;
        $course->course_desc = $course_desc;
        $course->course_grade = $course_grade;
        $course->course_image = $course_image;

        // $course-> save();

        if ($course->save()) {
            $message = 'Course successfully inserted!';
        }
        return redirect()->route('inputdata')->with(['message' => $message]);
    }

   
}
