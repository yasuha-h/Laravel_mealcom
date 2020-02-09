@extends('layouts.app')

@section('content')
  <div class="container py-3 border-bottom">
    {{ Auth::name() }}  
  </div>
@endsection