@extends('main')
@section('title', ' - create_post')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create Post</h1>
    <hr>
    {!! Form::open(array('route' => 'posts.store')) !!}
      {{ Form::label('title', 'title:') }}
      {{ Form::text('title', null, array('class' => 'form-control')) }}

      {{ Form::label('body', 'body:') }}
      {{ Form::textarea('body', null, array('class' => 'form-control')) }}

      {{ Form::submit('create post', array('class' => 'btn btn-success btn-lg btn-block')) }}
    {!! Form::close() !!}
 </div>
</div>
@endsection