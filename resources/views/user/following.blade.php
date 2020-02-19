@extends('layouts.app')

@section('content')
  {{ $followings }}
  @foreach($followings as $following)
    <div class="container py-3 border-bottom">
      {{ $following->target_id }}
    </div>
  @endforeach
@endsection