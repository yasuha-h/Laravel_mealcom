@extends('layouts.app')
@section('content')

@include('common.errors')
<div class="container">
  <form action="{{'/signup'}}" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <input type="email" class="w-75 w-sm-50 rounded" id="email" name="email" 
        placeholder="メールアドレスを入力してください" value="{{ old('email') }}">
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <input type="text" type="password" class="w-75 w-sm-50 rounded" id="password" name="password" 
        placeholder="パスワード" value="{{ old('password') }}">
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