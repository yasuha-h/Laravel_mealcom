@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <!-- ユーザープロフィール  -->
      <div class="col-4 row pt-5 px-0 mx-0 text-center">
        <h3 class="col-10 text-center pt-5">{{ $user->name }}</h3>
        <div class="col-10 text-center">ID:{{ $user->mealcom_id }}</div>
        <div class="col-10 text-center pt-5">性別:{{ $user->sex_code }}</div>
        <div class="col-10 text-center pt-5">{{ $user->profile }}</div>
      </div>
      @include('common.navbar')
      <!-- ユーザーシェア -->
      <div class="col-7 border-left px-0">
      </div>
    </div>
  </div>
@endsection
