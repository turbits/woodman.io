@extends('main')
@section('title', ' - view_post')
@section('content')
  <div class="row">
    {{-- post title & body --}}
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <hr>
      <p>{{ $post->body }}</p>
    </div>
    
    {{-- sidebar --}}
    <div class="col-md-4">
      <div class="well">
        {{-- url slug --}}
        <dl class="dl-horizontal">
          {{-- title --}}
          <dt>url</dt>
          {{-- time --}}
          <dd><a href="{{ url($post->slug) }}">post URL</a></dd>
        </dl>
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
            {!! Html::linkRoute('posts.edit', 'edit', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('delete', ['class' => 'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
          </div>
        </div> <!-- end row -->

        <div class="row">
          <div class="col-md-12">
            {{ Html::linkRoute('posts.index', '<< all posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
          </div>
        </div> <!-- end row -->
      </div>
    </div>
  </div>
@stop
