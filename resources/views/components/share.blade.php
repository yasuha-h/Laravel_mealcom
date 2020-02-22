@foreach ($posts as $post)
  <div class="container-40 border-grey row pt-3 pb-0 px-0 rounded-lg">
    <div class="offset-1 col-10 text-center">
      <!-- text-content -->
      {{ $post->content }}
    </div>
    <div class="offset-1 col-10 text-center">
      <!-- img -->
      {{ $post->img_1 }}
    </div>
    <div class="offset-1 col-10 text-center"></div>
    <div class="col-1 p-0">
      <i class="fas fa-heart"></i>
    </div>
  </div>
@endforeach