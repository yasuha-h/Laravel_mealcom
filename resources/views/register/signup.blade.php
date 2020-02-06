@extends('layouts.app')
@section('content')

@include('common.errors')
<div class="container">
  <form action="{{'/signup'}}" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <input type="text" class="form-control" id="user_name" name="name" 
        placeholder="ユーザー名" value="{{ old('name') }}">
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <input type="text" class="form-control" id="mealcom_id" name="mealcom_id" 
        placeholder="mealcom ID" value="{{ old('mealcom_id') }}">
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <input type="password" class="form-control" id="password" name="password" 
        placeholder="パスワード" value="{{ old('password') }}">
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <input type="email" class="form-control" id="email" name="email" 
        placeholder="メールアドレス" value="{{ old('email') }}">
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1 col-md-6 offset-sm-3 pt-5 text-center">
        <button type="submit" class="btn btn-primary">登録する</button>
      </div>
    </div>
  </form>
</div>
@endsection
  
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/signup/signup.css') }}">
@endsection