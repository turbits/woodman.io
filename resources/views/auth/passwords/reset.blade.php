@extends('main')
@section('title', ' - password_reset')
@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">Reset Password</div>
        <div class="panel-body">

          {!! Form::open(['url' => 'password/reset', 'method' => 'POST']) !!}
            {{-- token --}}
            {{ Form::hidden('token', $token) }}
            {{-- email label & input --}}
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email', $email, ['class' => 'form-control']) }}
            <br>
            {{-- new password --}}
            {{ Form::label('password', 'New Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            <br>
            {{-- password confirm --}}
            {{ Form::label('password_confirmation', 'Password Again:') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
            <br>
            {{-- submit button --}}
            {{ Form::submit('Set Password', ['class' => 'btn btn-success btn-block']) }}

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

@stop
