@if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    <strong>{{ Session::get('success') }}</strong>
  </div>
@endif

@if (!$errors->isEmpty())
  <div class="alert alert-danger" role="alert">
    <strong>Errors:</strong>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
  </div>
@endif
