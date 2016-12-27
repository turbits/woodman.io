@extends('main')
@section('title', ' - register')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::open() !!}
        {{-- name field --}}
        {{ Form::label('name', 'Name: ') }}<br>
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        <br>
        {{-- email field --}}
        {{ Form::label('email', 'Email: ') }}<br>
        {{ Form::email('email', null, ['class' => 'form-control']) }}
        <br>
        {{-- password field --}}
        {{ Form::label('password', 'Password: ') }}<br>
        {{ Form::password('password', ['class' => 'form-control']) }}
        <br>
        {{-- password confirm field --}}
        {{ Form::label('password_confirmation', 'Password Again: ') }}<br>
        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        <br>
        <br>
        {{-- submit --}}
        {{ Form::submit('Register', ['class' => 'btn btn-primary btn-block']) }}
      {!! Form::close() !!}
    </div>
  </div>
@stop
