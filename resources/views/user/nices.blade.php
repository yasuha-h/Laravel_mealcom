@extends('layouts.app')
@section('content')
  @include('components.share')
  {{-- @foreach($nices as $nice)
    <div class="container py-3 border-bottom">
      <div class="row">
        <div class="col-3 d-flex align-items-center justify-content-center">
          {{ $nice->id }}
        </div>
        <div class="col-3 row">
          <p class="col-12 m-0 fs-user-name">{{ $nice->img_1 }}</p>
          <p class="col-12 m-0 fs-m-id-name">{{ $nice->content }}</p>
        </div>
        <div class="offset-3 col-2 d-flex align-items-center 
                    justify-content-center 
                    bg-info rounded-pill text-white">
          フォローする
        </div>
      </div>
    </div>
  @endforeach --}}
@endsection