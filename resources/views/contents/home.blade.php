@extends('layout.mainlayout')
@section('title')
Homepage
@endsection
@section('content')


{{-- <div class="album text-muted"> --}}
<div class="container">

  {{-- For form validation and reporting the error  --}}
@include('includes.message-block')
  {{--  demo data  --}}
  <div class="row">
    <h1>This is a demo text</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis
      consequat.
      Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit
      et
      leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut
      dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel
      sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum
      ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
  </div>

  {{-- Sign In Form --}}
  <div class="row">
    <div class="col-md-6">
      <h3> Sign Up </h3>
      <form action="{{ route('signup')}}" method="post">
        <div class="form-group">
          <label for="email">Your Email</label>
          <input class="form-control {{ $errors->has('email') ? 'is-invalid':''}}" type="text" name="email" id="email" value="{{ Request::old('email')}}">
        </div>
        <div class="form-group">
          <label for="first_name">Your First Name</label>
          <input class="form-control {{ $errors->has('email') ? 'is-invalid':''}}" type="text" name="first_name" id="first_name"
            value="{{ Request::old('first_name')}}">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control {{ $errors->has('email') ? 'is-invalid':''}}" type="password" name="password" id="password"
            value="{{ Request::old('password')}}">
        </div>
        <button type="submit" class="btn btn-primary"> Submit </button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>


    {{-- Sign In --}}
    <div class="col-md-6">
      <h3> Sign In </h3>
      <form action="{{ route('signin')}}" method="post">
        
        <div class="form-group">
          <label for="email">Your Email</label>
          <input class="form-control {{ $errors->has('email') ? 'is-invalid':''}}" type="text" name="email" id="email" value="{{ Request::old('email')}}">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control {{ $errors->has('email') ? 'is-invalid':''}}" type="password" name="password" id="password"
            value="{{ Request::old('password')}}">
        </div>
        <button type="submit" class="btn btn-primary"> Submit </button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>

  </div>
</div>
{{-- </div> --}}
@endsection