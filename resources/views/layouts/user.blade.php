<!DOCTYPE html>
<html lang="ja">
  @include('common.head')
  <body>
    @include('components.header')
    <div class="container h-100">
      <div class="row h-100">
        <!-- ユーザープロフィール  -->
        <div class="col-4 row px-0 h-100 m-0 sticky pt-5 text-center">
          <img class="offset-4 col-4 border rounded-circle p-0" src="{{ $user->thumbnail_path }}" width="125px" height="125px">
          <h3 class="sticky col-12 text-center m-0 pt-2">{{ $user->name }}</h3>
          <div class="col-12 text-center pt-3">ID:{{ $user->mealcom_id }}</div>
          <div class="col-12 text-center pt-3">性別:{{ $user->sex_code }}</div>
          <div class="col-12 text-center mb-1 pt-3">{{ $user->profile }}</div>
          @if(auth()->id() === $user->id)
            <div class="offset-3 col-6 pt-3 text-center">
              <a href="/edit" class="d-block rounded-pill w-100 bg-info text-white py-2 px-3">
                プロフィール編集
              </a>
            </div>
          @else
            @if (!auth()->user()->isFollowing($user->id))
              <div class="offset-3 col-6 d-flex align-items-center 
                          justify-content-center rounded-pill pt-3">
                <form action="{{ route('follow', ['id' => $user->id]) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn border">フォロー</button>
                </form>
              </div>
            @else
              <div class="offset-3 col-6 d-flex align-items-center 
                          justify-content-center rounded-pill pt-3">
                <form action="{{ route('unfollow', ['id' => $user->id]) }}" method="POST">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-info">フォロー中</button>
                </form>
              </div>
            @endif
          @endif
          </div>
        @include('common.navbar')
          <!-- ユーザーシェア -->
          <div class="col-7 px-0">
            @yield('content')
          </div>
      </div>
    </div>
  </body>
</html>