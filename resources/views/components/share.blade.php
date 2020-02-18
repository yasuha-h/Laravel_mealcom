<div class="container rounded row">
  @foreach ($posts as $post)
    <div class="offset-1 col-10 text-center">
      <!-- text-content -->
      {{ $post->content }}
    </div>
  @endforeach
  <div class="offset-1 col-10 text-center">
    <!-- img -->
    <!-- {{ $user }} -->
  </div>
  <div class="col-1">
    <i class="fas fa-heart"></i>
  </div>
</div>