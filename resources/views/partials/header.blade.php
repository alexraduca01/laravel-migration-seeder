<div class="container justify-content-center d-flex">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link fs-2 {{ Route::currentRouteName() == 'home' ? 'active' : 'text-black' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-2 {{ Route::currentRouteName() == 'trains.index' ? 'active' : 'text-black' }}" href="{{ route('trains.index') }}">Trains</a>
        </li>
      </ul>
</div>
