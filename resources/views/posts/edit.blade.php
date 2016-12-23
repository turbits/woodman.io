@extends('main')
@section('title', ' - edit_post')
@section('content')
  <div class="row">
    {!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PATCH')) !!}

    {{-- post title & body --}}
    <div class="col-md-8">
      {{ Form::label('title', 'title:') }}
      <h1>{{ Form::text('title', null, array('class' => 'form-control input-lg')) }}</h1>
      <hr>
      {{ Form::label('body', 'body:') }}
      <p>{{ Form::textarea('body', null, array('class' => 'form-control')) }}</p>

    </div>
    
    {{-- sidebar --}}
    <div class="col-md-4">
      <div class="well">
        {{-- created @ --}}
        <dl class="dl-horizontal">
          {{-- title --}}
          <dt>created on</dt>
          {{-- time --}}
          <dd>{{ date('j M y H:i', strtotime($post->created_at)) }}</dd>
        </dl>
        {{-- updated @ --}}
        <dl class="dl-horizontal">
          {{-- title --}}
          <dt>last updated</dt>
          {{-- time --}}
          <dd><strong>{{ date('j M y H:i', strtotime($post->updated_at)) }}</strong></dd>
        </dl>
        <hr>
        {{-- buttons --}}
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {{ Form::submit('save changes', array('class' => 'btn btn-success btn-block')) }}
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div> <!-- end row -->
@stop
