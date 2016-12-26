@extends('main')
@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@stop
@section('title', ' - create_post')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create Post</h1>
    <hr>
    {{-- form --}}
    {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
      {{-- title --}}
      {{ Form::label('title', 'title:') }}
      {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

      {{-- slug --}}
      {{ Form::label('slug', 'url:') }}
      {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}

      {{-- body --}}
      {{ Form::label('body', 'body:') }}
      {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
      
      {{-- submit --}}
      {{ Form::submit('create post', ['class' => 'btn btn-success btn-lg btn-block']) }}
    {!! Form::close() !!}
 </div>
</div>
@stop
@section('scripts')
  {{!! Html::script('js/parsley.min.js') !!}
@stop
