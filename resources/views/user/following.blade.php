@extends('layouts.user')

@section('content')
  @foreach($following_users as $following_user)
    <div class="container py-3 border-bottom">
      <div class="row">
        <div class="col-3 d-flex align-items-center justify-content-center">
          <img class="offset-4 col-5 border rounded-circle p-0" src="{{ $following_user->thumbnail_path }}">
        </div>
        <div class="col-3 row">
          <p class="col-12 m-0 fs-user-name">{{ $following_user->name }}</p>
          <p class="col-12 m-0 fs-m-id-name">{{ $following_user->mealcom_id }}</p>
        </div>
        <div class="offset-3 col-3 d-flex align-items-center 
                    justify-content-center rounded-pill">
            <form action="{{ route('unfollow', ['id' => $following_user->id]) }}" method="POST">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-info rounded-pill">フォロー中</button>
            </form>
        </div>
      </div>
    </div>
  @endforeach
@endsection