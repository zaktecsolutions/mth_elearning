@extends('layout.dbmainlayout')
@section('title')
Homepage
@endsection
@section('content')

<div class="container-fluid">
  {{-- For form validation and reporting the error  --}}
  @include('includes.message-block')
  <section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
      <header>
        <h3> What do you have to say? </h3>
      </header>
      <form action="{{route('post.create')}}" method="post">
        <div class="form-group">
          <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"> </textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Create Post </button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>
  </section>

  <section class="row posts">
    <div class="col-md-6 col-md-offset-3">
      <header>
        <h3> What aother people say..</h3>
      </header>
      {{-- loops through the database to display post --}}
      @foreach ($posts as $post)
      <article class="post" data-postid="{{ $post->id }}">
        <p> {{$post->body}}</p>
        <div class="info">
          Posted By {{$post->user->first_name}} on {{$post->created_at}}
        </div>
        <div class="interaction">
          <a href="#">Like </a>|
          <a href="#">DisLike </a>
          @if(Auth::user()==$post->user)
          |
          <a href="#" class="edit">Edit </a>|
          <a href="{{route('post.delete', ['post_id'=> $post->id])}}">Delete </a>
          @endif
        </div>
      </article>
      @endforeach
  </section>

  <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form group">
              <label for="post-body">Edit the Post</label>
              <textarea class="form-control" name="post-body" id="post-body" rows="5"> </textarea>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
        </div>
      </div> {{-- .modal-content  --}}
    </div> {{-- .modal-dialog --}}
  </div> {{--  .modal --}}
</div>
@endsection
<script>
  var token = '{{ Session::token() }}';
  var url= '{{route('edit')}}';
</script>