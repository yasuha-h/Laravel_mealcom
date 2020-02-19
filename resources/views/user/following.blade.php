@extends('layouts.app')

@section('content')
  @foreach($followings as $following)
    <div class="container py-3 border-bottom">
      {{ $following_user }}
    </div>
  @endforeach
@endsection