@extends('layout.mainlayout')
@section('title')
Homepage
@endsection
@section('content')
{{-- <div class="album text-muted"> --}}
  <div class="container">
    <div class="row">
      <h1>This is a demo text</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat.
        Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et
        leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut
        dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel
        sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum
        ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
    </div>

    {{-- Sign In Form --}}
    <div class="row">
      <div class="col-md-6">
        <h3> Sign Up </h3>
        <form action="#" method="post">
          <div class="form-group">
            <label for="email">Your Email</label>
            <input class="form-control" type="text" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="first_name">Your First Name</label>
            <input class="form-control" type="text" name="first_name" id="first_name">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <button type="submit" class="btn btn-primary"> Submit </button>
        </form>
      </div>
      {{-- Sign  --}}
    
      <div class="col-md-6">
      <h3> Sign IN </h3>
      <form action="#" method="post">
        <div class="form-group">
          <label for="email">Your Email</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary"> Submit </button>
      </form>
    </div>
    

    </div>
  </div>
{{-- </div> --}}
@endsection