<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mealcom</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app_ex.css') }}">
    @yield('css')
  </head>
  <body>
    <header>
    <div class="container py-5 border-bottom">
      <div class="row">
        <h2 class="col-3 text-center align-self-center">Mealcom</h2>
        <div class="col-5 offset-4 d-flex">
          @auth
          <ul class="list-unstyled row w-100">
              <li class="align-self-center w-25">
                <a href="/user/{id}" class="d-block text-center"></a>
              </li>
              <li class="align-self-center w-25">
                <button class="d-block text-center"
                  onclick="document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </button>
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
    @include('components.header')
    @yield('content')
  </body>
</html>