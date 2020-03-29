@extends('layout.dbmainlayout')
@section('title')
Homepage
@endsection
@section('content')
{{-- <div class="album text-muted"> --}}
<section class="container">
    {{--  <div class="row">
        <h1>dashboard</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis
            consequat.ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
    </div> --}}
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-lg-12 ">
            <div class="alert alert-info">
                <h3> <strong>Welcome to DashBoard ! </strong> Choose any of the following option.</h3>
            </div>
        </div>
    </div>
    <!-- /. ROW 1 -->
    <!-- link to post data   -->
    <div class="row text-center pad-top">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ route('post')}}">
                    <i class="fa fa-circle-o-notch fa-5x"></i>
                    <h4>Post</h4>
                </a>
            </div>
        </div>
        <!-- link to update account   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ route('account')}}">
                    <i class="fa fa-envelope-o fa-5x"></i>
                    <h4>Learner Account</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ route('inputdata')}}">
                    <i class="fa fa-lightbulb-o fa-5x"></i>
                    <h4>Quiz</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>Contact Tutor</h4>
                </a>
            </div>
        </div>
        {{--  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-comments-o fa-5x"></i>
                    <h4>Contact Tutor</h4>
                </a>
            </div>
        </div> --}}
    </div>
    <!-- /. ROW  -->
    <!-- link to input data   -->
    <div class="row text-center pad-top">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-clipboard fa-5x"></i>
                    <h4>Learners</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-gear fa-5x"></i>
                    <h4>Tutor Account</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-wechat fa-5x"></i>
                    <h4>Setting</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-bell-o fa-5x"></i>
                    <h4>Contact Admin </h4>
                </a>
            </div>
        </div>
        {{--   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-user fa-5x"></i>
                    <h4>Contact Admin</h4>
                </a>
            </div> 
    </div>  --}}
    </div>
    <!-- /. Last ROW  -->
    <!-- link to input data   -->
    <div class="row text-center pad-top">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="{{ route('inputdata')}}">
                    <i class="fa fa-envelope-o fa-5x"></i>
                    <h4>Input Data</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-lightbulb-o fa-5x"></i>
                    <h4>Account</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>Setting</h4>
                </a>
            </div>
        </div>
        <!-- link to input data   -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-key fa-5x"></i>
                    <h4>Extra </h4>
                </a>
            </div>
        </div>
        {{--   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="blank.html">
                    <i class="fa fa-circle-o-notch fa-5x"></i>
                    <h4>Setting</h4>
                </a>
            </div> --}}
    </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12 ">
            <br />
            <div class="alert alert-info">
                <strong>Digital Coach </strong> Your progress is given below <a target="_blank"
                    href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
            </div>

        </div>
    </div>
    <!-- /. ROW  -->
</section>
@endsection