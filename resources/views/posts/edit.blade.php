@extends('main')
@section('title', ' - edit_post')
@section('content')
  <div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}

    {{-- post title & body --}}
    <div class="col-md-8">
      {{ Form::label('title', 'title:') }}
      <h1>{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}</h1>
      {{-- slug --}}
      {{ Form::label('slug', 'url:') }}
      {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}
      <hr>
      {{ Form::label('body', 'body:') }}
      <p>{{ Form::textarea('body', null, ['class' => 'form-control']) }}</p>

    </div>

    {{-- sidebar --}}
    <div class="col-md-4">
      <div class="well">
        {{-- created @ --}}
        <dl class="dl-horizontal">
          {{-- title --}}
          <label>created on</label>
          {{-- time --}}
          <p>{{ date('j M y H:i', strtotime($post->created_at)) }}</p>
        </dl>
        {{-- updated @ --}}
        <dl class="dl-horizontal">
          {{-- title --}}
          <label>last updated</label>
          {{-- time --}}
          <p><strong>{{ date('j M y H:i', strtotime($post->updated_at)) }}</strong></p>
        </dl>
        <hr>
        {{-- buttons --}}
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'cancel', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
          </div>
          <div class="col-sm-6">
            {{ Form::submit('save changes', ['class' => 'btn btn-success btn-block']) }}
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div> <!-- end row -->
@stop
