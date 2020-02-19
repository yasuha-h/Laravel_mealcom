@extends('layouts.app')

@section('content')
  @foreach($following_users as $following_user)
    <div class="container py-3 border-bottom">
      {{ $following_user }}
    </div>
  @endforeach
@endsection