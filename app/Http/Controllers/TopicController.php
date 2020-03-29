<?php

namespace App\Http\Controllers;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //control the courses database
    public function PostInsertTopic(Request $request)
    {
        // Checks for validation of signin form

        $this->validate($request, [
            'topic_name' => 'required| max:120',
            'topic_code' => 'required| max:120',
            'topic_desc' => 'required| max:120',
            'topic_grade' => 'required| numeric|min:1|max:9',
            'topic_les_num' => 'required| numeric',
        ]);

        // input sign in information
        $topic_name = $request['topic_name'];
        $topic_code = $request['topic_code'];
        $topic_desc = $request['topic_desc'];
        $topic_grade = $request['topic_grade'];
        $topic_les_num = $request['topic_les_num'];

        $topic = new Topic();
        $topic->topic_name = $topic_name;
        $topic->topic_code = $topic_code;
        $topic->topic_desc = $topic_desc;
        $topic->topic_grade = $topic_grade;
        $topic->topic_les_num = $topic_les_num;

        // $course-> save();

        if ($topic->save()) {
            $message = 'Topics successfully inserted!';
        }
        return redirect()->route('inputdata')->with(['message' => $message]);
    }
}
