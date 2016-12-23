@extends('main')
@section('title', ' - all_posts')
@section('content')
  <div class="row">
    <div class="col-md-10">
      <h1>All Posts</h1>
    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New Post</a>
    </div>
    <hr>
  </div> <!-- end of row -->
  <div class="row">
    <div class="col-md-12">
      <table class="table">

        <thead>
          <th>#</th>
          <th>title</th>
          <th>body</th>
          <th>created @</th>
          <th></th>
        </thead>

        <tbody>
          @foreach($posts as $post)
            
            <tr>
              {{-- post ID --}}
              <th>{{ $post->id }}</th>
              {{-- post title --}}
              <td>{{ substr($post->title, 0, 20) }}{{ strlen($post->title) > 20 ? '...' : '' }}</td>
              {{-- post body --}}
              <td>{{ substr($post->body, 0, 30) }}{{ strlen($post->body) > 30 ? '...' : '' }}</td>
              {{-- post created@ --}}
              <td>{{ date('j M y H:i', strtotime($post->created_at)) }}</td>
              {{-- view/edit buttons --}}
              <td>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">view</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">edit</a>
              </td>
            </tr>

          @endforeach
        </tbody>

      </table> <!-- end table -->
      <div class="text-center">
        {!! $posts->links(); !!}
      </div>
      <div class="text-center">
        page {!! $posts->currentPage(); !!} of {!! $posts->lastPage() !!}
      </div>
    </div>
  </div>
@stop