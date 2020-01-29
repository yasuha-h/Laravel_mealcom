<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mealcom</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app_ex.css') }}">
    @yield('signup-css')
  </head>
  <body>
    <header>
    <div class="container py-5 border-bottom">
      <div class="row">
        <h2 class="col-3 text-center align-self-center">Mealcom</h2>
        <div class="col-5 offset-4 d-flex">
          <ul class="list-unstyled row w-100">
            <li class="align-self-center w-50">
              <a href="#" class="d-block text-center">サインアップ</a>
            </li>
            <li class="align-self-center w-50">
              <a href="#" class="d-block text-center">サインイン</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>
    @yield('signup-form')
  </body>
</html>
