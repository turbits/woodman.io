@extends('main')
@section('title', ' - contact')
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>CONTACT</h1>
    <hr>
    <form action="">
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="subject">subject</label>
        <input type="text" name="subject" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="message">message</label>
        <textarea name="message" class="form-control" value=""></textarea>
      </div>
      <input type="submit" class="btn btn-success" value="send">
    </form>
  </div>
</div>
@endsection