@extends('layouts.app')

@section('content')
  {{ $following_users }}
  @foreach($followings as $following)
    <div class="container py-3 border-bottom">
      {{ $following->target_id }}
    </div>
  @endforeach
@endsection