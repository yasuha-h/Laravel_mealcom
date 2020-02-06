@extends('layouts.app')
@section('content')

@include('common.errors')
<div class="container">
  <form action="{{'/login'}}" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
      <input id="password" type="password" class="form-control" name="password" placeholder="パスワード">
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <button type="submit" class="btn btn-primary">ログイン</button>
      </div>
    </div>
  </form>
</div>
@endsection
  
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/signup/signup.css') }}">
@endsection