<header>
  <div class="container py-1 border-bottom">
    <div class="row">
      <h2 class="col-3 text-center align-self-center">Mealcom</h2>
      <div class="col-7 offset-2 d-flex">
        @auth
          <ul class="list-unstyled row w-100">
            <li class="align-self-center w-25 offset-2">
              <a href="/user/{id}" class="d-block text-center">プロフィール</a>
            </li>
            <li class="align-self-center w-25">
              <a href="#" class="d-block text-center"
                onclick="document.getElementById('logout-form').submit();">
                ログアウト
              </a>
              <form id="logout-form" action="{{'/logout'}}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
            <li class="align-self-center w-25">
              <a href="/share" class="d-block text-center">シェア</a>
            </li>
          </ul>
        @endauth
        @guest
          <ul class="list-unstyled row w-100">
            <li class="align-self-center w-50">
              <a href="/signup" class="d-block text-center">サインアップ</a>
            </li>
            <li class="align-self-center w-50">
              <a href="/login" class="d-block text-center">サインイン</a>
            </li>
          </ul>
        @endguest
      </div>
    </div>
  </div>
</header>