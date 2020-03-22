@extends('layouts.user')
@section('content')
  @foreach($followed_users as $followed_user)
    <div class="container py-3 border-bottom">
      <div class="row">
        <div class="col-3 d-flex align-items-center justify-content-center">
          <img class="offset-4 col-5 border rounded-circle p-0" src="{{ $followed_user->thumbnail_path }}">
        </div>
        <div class="col-3 row">
          <p class="col-12 m-0 fs-user-name">{{ $followed_user->name }}</p>
          <p class="col-12 m-0 fs-m-id-name">{{ $followed_user->mealcom_id }}</p>
        </div>
        @if (!auth()->user()->isFollowing($followed_user->id))
          <div class="offset-3 col-3 d-flex align-items-center 
                      justify-content-center">
            <form action="{{ route('follow', ['id' => $followed_user->id]) }}" method="POST">
              @csrf
              <button type="submit" class="btn border rounded-pill">フォロー</button>
            </form>
          </div>
        @else
          <div class="offset-3 col-3 d-flex align-items-center 
                     justify-content-center">
            <form action="{{ route('unfollow', ['id' => $followed_user->id]) }}" method="POST">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-info rounded-pill">フォロー中</button>
            </form>
          </div>
        @endif
      </div>
    </div>
  @endforeach
@endsection