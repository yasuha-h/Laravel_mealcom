@extends('layouts.app')
@section('content')
  <div class="container rounded bg-info">
    <form action="{{ '/share'  }}" method="POST" enctype="multipart/form-data">
      @csrf
      @include('common.errors')
      <div class="d-flex justify-content-center py-4">
        <textarea class="border-secondary" name="post_content" type="text" id="post" 
        cols="60" rows="10" value="{{ old('post_content') }}"
        placeholder="お気に入りの食事をシェア！"></textarea>  
      </div>
      <input type="file" name="post_img" class="d-block m-auto">
      <div class="py-5 text-center">
        <button type="submit" class="w-25 btn btn-secondary">シェア</button>
      </div>
    </form>
  </div>
@endsection
