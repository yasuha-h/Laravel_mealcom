@extends('layouts.app')
@section('content')
  <div class="container rounded bg-info pt-4 pb-3">
    <form action="{{ '/edit'  }}" method="POST" enctype="multipart/form-data">
      @csrf
      @include('common.errors')
      <ul class="list-unstyled row">
        <li class="pt-2 px-0 offset-3 col-6 text-center">
          <input type="text" name="name" class="form-control w-75 m-auto" 
                 placeholder="ユーザー名" value="{{ $auth->name }}">
        </li>
        <li class="pt-3 px-0 offset-3 col-6 text-center">
          <input type="text" name="mealcom_id" class="form-control w-75 m-auto" 
                 placeholder="mealcom_id" value="{{ $auth->mealcom_id }}">
        </li>
        <li class="pt-3 px-0 offset-3 col-6 text-center">
          <input type="text" name="email" class="form-control w-75 m-auto" 
                 placeholder="メールアドレス" value="{{ $auth->email }}">
        </li>
        <li class="pt-3 px-0 offset-3 col-6">
          <label class="text-dark">サムネイル:</label>
          <input type="file" name="thumbnail" class="w-50 d-inline">
        </li>
        <li class="pt-3 px-0 offset-3 col-6 text-center">
          <textarea class="form-control w-75 m-auto" name="profile" type="text" 
          id="post" rows="8" value="$auth->profile" placeholder="140文字"></textarea>  
        </li>
      </ul>
      <div class="row justify-content-center py-4">
      </div>
      <div class="pb-2 text-center">
        <button type="submit" class="w-25 btn btn-secondary">更新</button>
      </div>
    </form>
  </div>
@endsection
