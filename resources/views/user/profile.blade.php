@extends('layouts.app')
@include('components.header')

@section('content')
  <div class="container">
    <div class="row">
      <!-- ユーザープロフィール  -->
      <div class="col-6">
      {{ $user->name }}
      </div>
      <!-- ユーザーシェア -->
      <div class="col-6"></div>
    </div>
  </div>
@endsection