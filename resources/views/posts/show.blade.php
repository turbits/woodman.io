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
            {!! Html::linkRoute('posts.edit', 'edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.destroy', 'delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
