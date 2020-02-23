<header>
  <div class="container py-1 border-bottom">
    <div class="row">
      <a href="/" class="col-3 text-center align-self-center h2 m-0">Mealcom</a>
      <div class="col-6 offset-3 d-flex">
        @auth
          <ul class="list-unstyled row w-100">
            <li class="align-self-center col-3 offset-3">
              <a href="/user/{{ $user->id }}" class="p-1 d-block text-center">プロフィール</a>
            </li>
            <li class="align-self-center col-3">
              <a href="#" class="d-block text-center p-1"
                onclick="document.getElementById('logout-form').submit();">
                ログアウト
              </a>
              <form id="logout-form" action="{{'/logout'}}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
            <li class="align-self-center col-3">
              <a href="/share" class="d-block text-center p-1">シェア</a>
            </li>
          </ul>
        @endauth
        @guest
          <ul class="list-unstyled row w-100">
            <li class="align-self-center col-3 offset-6">
              <a href="/signup" class="d-block text-center">サインアップ</a>
            </li>
            <li class="align-self-center col-3">
              <a href="/login" class="d-block text-center">サインイン</a>
            </li>
          </ul>
        @endguest
      </div>
    </div>
  </div>
</header>