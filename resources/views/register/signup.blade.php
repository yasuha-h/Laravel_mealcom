@extends('layouts.app')
@section('signup-form')
<!-- <label class="col-sm-2 control-label" for="username">名前：</label> -->
<div class="container">
  <div class="row">
    <div class="col-10 offset-1 col-sm-6 offset-sm-3 pt-5 text-center">
      <input type="text" class="w-75 w-sm-50 rounded" id="username" name="username" 
      placeholder="メールアドレスを入力してください" value="{{ old('username') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-6 offset-3 pt-5 text-center">
      <input type="text" class="w-50 rounded" id="username" name="username" 
      placeholder="ユーザー名を入力してください" value="{{ old('username') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-6 offset-3 pt-5 text-center">
      <input type="text" class="w-50 rounded" id="username" name="username" 
      placeholder="パスワード" value="{{ old('username') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-6 offset-3 pt-5 text-center">
      <input type="text" class="w-50 rounded" id="username" name="username" 
      placeholder="パスワード(再確認)" value="{{ old('username') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-6 offset-3 pt-5 text-center">
      <input type="text" class="w-50 rounded" id="username" name="username" 
      placeholder="性別" value="{{ old('username') }}">
    </div>
  </div>
</div>
@endsection

@section('signup-css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/signup/signup.css') }}">
@endsection