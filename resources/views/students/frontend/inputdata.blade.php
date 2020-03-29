@extends('layout.dbmainlayout')
@section('title')
Account
@endsection
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 ">
            <div class="alert alert-info">
                <h3> <strong>Input your data here ! </strong> Choose any of the following tables.</h3>
            </div>
        </div>
    </div>

    <div class="row text-center pad-top">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputcourse">
                    <i class="fa fa-circle-o-notch fa-5x"></i>
                    <h4>Input Course</h4>
                </a>
            </div>
        </div>
        <!-- link to update account   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputtopic">
                    <i class="fa fa-envelope-o fa-5x"></i>
                    <h4>Input Topics</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputlessons">
                    <i class="fa fa-lightbulb-o fa-5x"></i>
                    <h4>Input Lessons</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputquizes">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>Input Quizes</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputquestions">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>Input Questions</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputanswer">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>Input Answers</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputlearner">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>Input Users</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ URL::route('inputdata') }}#inputtutors">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>Input extra</h4>
                </a>
            </div>
        </div>
    </div>
    <hr />
    {{-- For form validation and reporting the error  --}}
    @include('includes.message-block')

    <div class="row">
        <div class="col-md-12">
            <h3 id="inputcourse"> Input Courses </h3>
            <form action="{{ route('insertcourse')}}" method="post">
                <div class="form-group">
                    <label for="course_name">What is the name of the course ? </label>
                    <input class="form-control {{ $errors->has('course_name') ? 'is-invalid':''}}" type="text"
                        name="course_name" id="course_name" value="{{ Request::old('course_name')}}">
                </div>
                <div class="form-group">
                    <label for="course_code">What is the course code ? </label>
                    <input class="form-control {{ $errors->has('course_code') ? 'is-invalid':''}}" type="text"
                        name="course_code" id="course_code" value="{{ Request::old('course_code')}}">
                </div>
                <div class="form-group">
                    <label for="course_desc">What is the course description ? </label>
                    <input class="form-control {{ $errors->has('course_desc') ? 'is-invalid':''}}" type="text"
                        name="course_desc" id="course_desc" value="{{ Request::old('course_desc')}}">
                </div>
                <div class="form-group">
                    <label for="course_grade">What is the course grade ? </label>
                    <input class="form-control {{ $errors->has('course_grade') ? 'is-invalid':''}}" type="text"
                        name="course_grade" id="course_grade" value="{{ Request::old('course_grade')}}">
                </div>
                <div class="form-group">
                    <label for="course_image">What is the course image ? </label>
                    <input class="form-control {{ $errors->has('course_image') ? 'is-invalid':''}}" type="text"
                        name="course_image" id="course_image" value="{{ Request::old('course_image')}}">
                </div>
                <button type="submit" class="btn btn-primary"> Submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <h3 id="inputtopics"> Input Topics </h3>
            <form action="{{ route('inserttopic')}}" method="post">
                <div class="form-group">
                    <label for="topic_name">What is the name of the topic ? </label>
                    <input class="form-control {{ $errors->has('topic_name') ? 'is-invalid':''}}" type="text"
                        name="topic_name" id="topic_name" value="{{ Request::old('topic_name')}}">
                </div>
                <div class="form-group">
                    <label for="topic_code">What is the topic code ? </label>
                    <input class="form-control {{ $errors->has('topic_code') ? 'is-invalid':''}}" type="text"
                        name="topic_code" id="topic_code" value="{{ Request::old('topic_code')}}">
                </div>
                <div class="form-group">
                    <label for="topic_desc">What is the the topic description ? </label>
                    <input class="form-control {{ $errors->has('topic_desc') ? 'is-invalid':''}}" type="text"
                        name="topic_desc" id="topic_desc" value="{{ Request::old('topic_desc')}}">
                </div>
                <div class="form-group">
                    <label for="topic_grade">What is the topic grade ? </label>
                    <input class="form-control {{ $errors->has('topic_grade') ? 'is-invalid':''}}" type="text"
                        name="topic_grade" id="topic_grade" value="{{ Request::old('topic_grade')}}">
                </div>
                <div class="form-group">
                    <label for="topic_les_num">What is the topic number of lessons ? </label>
                    <input class="form-control {{ $errors->has('topic_les_num') ? 'is-invalid':''}}" type="text"
                        name="topic_les_num" id="topic_les_num" value="{{ Request::old('topic_les_num')}}">
                </div>
                <button type="submit" class="btn btn-primary"> Submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <h3 id="inputlessons"> Input Lessons </h3>
            <form action="{{ route('insertlesson')}}" method="post">
                <div class="form-group">
                    <label for="lesson_title">What is the lesson title ? </label>
                    <input class="form-control {{ $errors->has('lesson_title') ? 'is-invalid':''}}" type="text"
                        name="lesson_title" id="lesson_title" value="{{ Request::old('lesson_title')}}">
                </div>
                <div class="form-group">
                    <label for="lesson_code">What is the lesson code ? </label>
                    <input class="form-control {{ $errors->has('lesson_code') ? 'is-invalid':''}}" type="text"
                        name="lesson_code" id="lesson_code" value="{{ Request::old('lesson_code')}}">
                </div>
                <div class="form-group">
                    <label for="lesson_obj">What is the lesson objective ? </label>
                    <input class="form-control {{ $errors->has('lesson_obj') ? 'is-invalid':''}}" type="text"
                        name="lesson_obj" id="lesson_obj" value="{{ Request::old('lesson_obj')}}">
                </div>
                <div class="form-group">
                    <label for="lesson_ws">What is the lesson worksheet ? </label>
                    <input class="form-control {{ $errors->has('lesson_ws') ? 'is-invalid':''}}" type="text"
                        name="lesson_ws" id="lesson_ws" value="{{ Request::old('lesson_ws')}}">
                </div>
                <div class="form-group">
                    <label for="lesson_body">What is the lesson body ? </label>
                    <input class="form-control {{ $errors->has('lesson_body') ? 'is-invalid':''}}" type="text"
                        name="lesson_body" id="lesson_body" value="{{ Request::old('lesson_body')}}">
                </div>
                <div class="form-group">
                    <label for="lesson_grade">What is the lesson grade ? </label>
                    <input class="form-control {{ $errors->has('lesson_grade') ? 'is-invalid':''}}" type="text"
                        name="lesson_grade" id="lesson_grade" value="{{ Request::old('lesson_grade')}}">
                </div>
                <button type="submit" class="btn btn-primary"> Submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <h3 id="inputquizes"> Input Quizes </h3>
            <form action="{{ route('inserttopic')}}" method="post">
                <div class="form-group">
                    <label for="quiz_name">What is the name of the quiz ? </label>
                    <input class="form-control {{ $errors->has('quiz_name') ? 'is-invalid':''}}" type="text"
                        name="quiz_name" id="quiz_name" value="{{ Request::old('quiz_name')}}">
                </div>
                <div class="form-group">
                    <label for="quiz_code">What is the quiz code ? </label>
                    <input class="form-control {{ $errors->has('quiz_code') ? 'is-invalid':''}}" type="text"
                        name="quiz_code" id="quiz_code" value="{{ Request::old('quiz_code')}}">
                </div>
                <div class="form-group">
                    <label for="quiz_desc">What is the quiz description ? </label>
                    <input class="form-control {{ $errors->has('quiz_desc') ? 'is-invalid':''}}" type="text"
                        name="quiz_desc" id="quiz_desc" value="{{ Request::old('quiz_desc')}}">
                </div>
                <div class="form-group">
                    <label for="quiz_grade">What is the quiz grade ? </label>
                    <input class="form-control {{ $errors->has('quiz_grade') ? 'is-invalid':''}}" type="text"
                        name="quiz_grade" id="quiz_grade" value="{{ Request::old('quiz_grade')}}">
                </div>
                <div class="form-group">
                    <label for="quiz_time">What is the quiz time limit ? </label>
                    <input class="form-control {{ $errors->has('quiz_time') ? 'is-invalid':''}}" type="text"
                        name="quiz_time" id="quiz_time" value="{{ Request::old('quiz_time')}}">
                </div>
                <button type="submit" class="btn btn-primary"> Submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
    <hr />
     {{--
    <div class="row">
        <div class="col-md-12">
            <h3 id="inputquestions"> Input Questions </h3>
            <form action="{{ route('inserttopic')}}" method="post">
                <div class="form-group">
                    <label for="course_name">What is the question title ? </label>
                    <input class="form-control {{ $errors->has('course_name') ? 'is-invalid':''}}" type="text"
                        name="course_name" id="course_name" value="{{ Request::old('course_name')}}">
                </div>
                <div class="form-group">
                    <label for="course_code">What is the question code ? </label>
                    <input class="form-control {{ $errors->has('course_code') ? 'is-invalid':''}}" type="text"
                        name="course_code" id="course_code" value="{{ Request::old('course_code')}}">
                </div>
                <div class="form-group">
                    <label for="course_desc">What is the question ? </label>
                    <input class="form-control {{ $errors->has('course_desc') ? 'is-invalid':''}}" type="text"
                        name="course_desc" id="course_desc" value="{{ Request::old('course_desc')}}">
                </div>
                <div class="form-group">
                    <label for="course_grade">Has the question got an course_image ? </label>
                    <input class="form-control {{ $errors->has('course_grade') ? 'is-invalid':''}}" type="text"
                        name="course_grade" id="course_grade" value="{{ Request::old('course_grade')}}">
                </div>

                <button type="submit" class="btn btn-primary"> Submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <h3 id="inputanswers"> Input Answers </h3>
            <form action="{{ route('inserttopic')}}" method="post">
                <div class="form-group">
                    <label for="course_name">What is the answer code ? </label>
                    <input class="form-control {{ $errors->has('course_name') ? 'is-invalid':''}}" type="text"
                        name="course_name" id="course_name" value="{{ Request::old('course_name')}}">
                </div>
                <div class="form-group">
                    <label for="course_code">What is the answer ? </label>
                    <input class="form-control {{ $errors->has('course_code') ? 'is-invalid':''}}" type="text"
                        name="course_code" id="course_code" value="{{ Request::old('course_code')}}">
                </div>

                <button type="submit" class="btn btn-primary"> Submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <h3 id="inputtutors"> Input User </h3>
            <form action="{{ route('inserttopic')}}" method="post">
                <div class="form-group">
                    <label for="course_name">What is your first name ? </label>
                    <input class="form-control {{ $errors->has('course_name') ? 'is-invalid':''}}" type="text"
                        name="course_name" id="course_name" value="{{ Request::old('course_name')}}">
                </div>
                <div class="form-group">
                    <label for="course_code">What is your second name ? </label>
                    <input class="form-control {{ $errors->has('course_code') ? 'is-invalid':''}}" type="text"
                        name="course_code" id="course_code" value="{{ Request::old('course_code')}}">
                </div>
                <div class="form-group">
                    <label for="course_desc">What is your email ? </label>
                    <input class="form-control {{ $errors->has('course_desc') ? 'is-invalid':''}}" type="text"
                        name="course_desc" id="course_desc" value="{{ Request::old('course_desc')}}">
                </div>
                <div class="form-group">
                    <label for="course_grade">What is your password ? </label>
                    <input class="form-control {{ $errors->has('course_grade') ? 'is-invalid':''}}" type="text"
                        name="course_grade" id="course_grade" value="{{ Request::old('course_grade')}}">
                </div>
                <div class="form-group">
                    <label for="course_grade">What is your role ? </label>
                    <input class="form-control {{ $errors->has('course_grade') ? 'is-invalid':''}}" type="text"
                        name="course_grade" id="course_grade" value="{{ Request::old('course_grade')}}">
                </div>

                <button type="submit" class="btn btn-primary"> Submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
    <hr /> --}}
</div>
@endsection