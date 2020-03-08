@foreach ($posts as $post)
  <div class="container-60 border-grey row pt-3 pb-0 px-0 rounded-lg">
    <div class="offset-1 col-10 text-center">
      <!-- img -->
      <img src="{{ asset('/storage/'.$post->img_1) }}">
    </div>
    <div class="offset-1 col-10">
      <!-- text-content -->
      {{ $post->content }}
    </div>
    <div class="offset-1 col-9"></div>
    @if(auth()->id() === $post->user_id)
      <div class="col-1 text-center p-0">
        <form action="{{ route('post-delete', ['id' => $post->id]) }}" method="POST">
          @csrf
          {{ method_field('DELETE') }}
          <button type="submit" class="text-center btn text-primary px-2 py-0">D</button>
        </form>
      </div>
    @endif
    <div class="col-1 p-0 d-flex align-self-center">
      @if($nice->isNice(auth()->id(), $post->id))
        <form action="{{ route('un-nice', ['post_id' => $post->id]) }}" method="POST">
          @csrf
          {{ method_field('DELETE') }}
          <button type="submit" class="p-1 border-0"><i class="fas fa-heart heart-pink"></i></button>
        </form>
      @else
        <form action="{{ route('nice', ['post_id' => $post->id]) }}" method="POST">
          @csrf
          <button type="submit" class="p-1 border-0"><i class="far fa-heart"></i></button>
        </form>
      @endif
    </div>
  </div>
@endforeach