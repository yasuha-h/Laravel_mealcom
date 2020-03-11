<nav class="nav col-1 text-center pr-0 border-right h-100 sticky">
  <ul class="list-unstyled w-100">
    <li>
      <a href="/user/{{ $user->id }}" class="nav-link w-100 py-4 my-5 px-0 btn-info border rounded-circle">シェア</a>
    </li>
    <li>
      <a href="/user/{{ $user->id }}/following" class="nav-link w-100 py-4 my-5 px-0 btn-info border rounded-circle">フォロー</a>
    </li>
    <li>
      <a href="/user/{{ $user->id }}/followers" class="nav-link w-100 py-4 my-5 px-0 btn-info border rounded-circle">フォロワー</a>
    </li>
    <li>
      <a href="/user/{{ $user->id }}/nices" class="nav-link w-100 py-4 my-5 px-0 btn-info border rounded-circle">いいね</a>
    </li>
  </ul>
</nav>
