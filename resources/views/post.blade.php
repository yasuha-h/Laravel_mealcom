@extends('layouts.app')
@section('content')
  <div class="container rounded bg-info">
    <form action="{{ '/share'  }}" method="POST">
      <div class="d-flex justify-content-center py-4">
        <textarea class="border-secondary" name="post" type="text" id="post" 
        cols="60" rows="10" value="{{ old('post') }}"
        placeholder="お気に入りの食事をシェア！"></textarea>  
      </div>
      <div class="py-5 text-center">
        <button type="submit" class="w-25 btn btn-secondary">シェア</button>
      </div>
    </form>
  </div>
@endsection
