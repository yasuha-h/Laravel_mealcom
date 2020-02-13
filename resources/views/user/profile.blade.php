@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <!-- ユーザープロフィール  -->
      <div class="col-4 offset-1 row pt-5 border-right">
        <h3 class="col-10 text-center pt-5">{{ $user->name }}</h3>
        <div class="col-10 text-center">ID:{{ $user->mealcom_id }}</div>
        <div class="col-10 text-center pt-5">性別:{{ $user->sex_code }}</div>
        <div class="col-10 text-center pt-5">{{ $user->profile }}</div>
      </div>
      <!-- ユーザーシェア -->
      <div class="col-6"></div>
    </div>
  </div>
@endsection