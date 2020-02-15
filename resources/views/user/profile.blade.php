@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <!-- ユーザープロフィール  -->
      <div class="col-4 row px-0 mx-0 mb-5 py-5 text-center">
        <h3 class="col-12 text-center m-0">{{ $user->name }}</h3>
        <div class="col-12 text-center">ID:{{ $user->mealcom_id }}</div>
        <div class="col-12 text-center">性別:{{ $user->sex_code }}</div>
        <div class="col-12 text-center mb-1">{{ $user->profile }}</div>
        @auth
        <div class="offset-3 col-6">
          <a href="#" class="d-block rounded w-100 bg-info text-white py-2 px-3">シェアする</a>
        </div>
        @endauth
      </div>
      @include('common.navbar')
      <!-- ユーザーシェア -->
      <div class="col-7 border-left px-0">
        @include('components.share')
      </div>
    </div>
  </div>
@endsection
