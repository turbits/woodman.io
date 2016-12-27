@extends('main')
@section('title', ' - password_reset')
@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">Reset Password</div>
        <div class="panel-body">

          {!! Form::open(['url' => 'password/email', 'method' => 'POST']) !!}
            {{-- email label & input --}}
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
            <br>
            {{-- submit button --}}
            {{ Form::submit('Reset Password', ['class' => 'btn btn-success btn-block']) }}

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

@stop
