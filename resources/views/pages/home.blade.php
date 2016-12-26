@extends('main')
@section('title', ' - front_page')
@section('content')
<!-- begin content -->
<div class="row">
  <div class="col-md-12">
    <!-- begin jumbotron -->
    <div class="jumbotron">
      <h1>Trevor Woodman</h1>
      <p>Welcome<br></p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Check it</a></p>
    </div>
  </div>
</div> <!-- end header/jumbotron -->
<div class="row">
  <div class="col-md-3">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate aliquid magnam impedit enim deserunt, soluta eos asperiores. Assumenda consequuntur dolorum, provident, quod itaque possimus. Excepturi tenetur id non in enim.
  </div>
  <div class="col-md-8 col-md-offset-1">

    @foreach($posts as $post)

    <div class="post">
      <h3>{{ $post->title }}</h3>
      <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? '...' : '' }}</p>
      <a href="" class="btn btn-primary">READ MORE</a>
    </div>
    <hr>

    @endforeach

  </div>
</div>
<!-- end content -->
@stop
