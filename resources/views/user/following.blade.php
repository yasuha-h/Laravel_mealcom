@extends('layouts.user')

@section('content')
  @foreach($following_users as $following_user)
    <div class="container py-3 border-bottom">
      <div class="row">
        <div class="col-3 d-flex align-items-center justify-content-center">
          {{ $following_user->thumbnail }}
        </div>
        <div class="col-3 row">
          <p class="col-12 m-0 fs-user-name">{{ $following_user->name }}</p>
          <p class="col-12 m-0 fs-m-id-name">{{ $following_user->mealcom_id }}</p>
        </div>
        <div class="offset-3 col-2 d-flex align-items-center 
                    justify-content-center 
                    bg-info rounded-pill text-white">
          フォローする
        </div>
      </div>
    </div>
  @endforeach
@endsection