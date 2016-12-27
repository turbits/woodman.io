@extends('main')
@section('title', ' - login')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::open() !!}
        {{-- email field --}}
        {{ Form::label('email', 'Email: ') }}<br>
        {{ Form::email('email', null, ['class' => 'form-control']) }}
        <br>
        {{-- password field --}}
        {{ Form::label('password', 'Password: ') }}<br>
        {{ Form::password('password', ['class' => 'form-control']) }}
        <br>
        {{-- remember checkbox --}}
        {{ Form::checkbox('remember') }}&nbsp;&nbsp;{{ Form::label('remember', 'Remember Me') }}
        <br>
        <br>
        {{-- submit --}}
        {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}
        <br>
        {{-- reset password --}}
        <p><a href="{{ url('password/reset') }}" class="muted-text">Forgot your password?</a></p>

      {!! Form::close() !!}
    </div>
  </div>
@stop
