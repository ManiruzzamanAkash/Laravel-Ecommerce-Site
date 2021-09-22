<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-light">
  <div class="container">


    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('images/logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Route::is('index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item  {{ Route::is('products') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('products') }}">Products</a>
        </li>
        <li class="nav-item  {{ Route::is('contact') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
            {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="search" placeholder="Search Products" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary search-icon-button" type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>

          </form>
        </li>

      </ul>

      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link btn-cart-nav" href="{{ route('carts') }}">

            <button class="btn btn-danger">
              <span class="mt-1">Cart</span>
              <span class="badge badge-warning" id="totalItems">
                {{ App\Models\Cart::totalItems() }}
              </span>
            </button>

          </a>
        </li>
        @guest
          <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width:40px">
              {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
              <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="{{ route('user.dashboard') }}">
                My dashboard
              </a>

              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      @endguest
    </ul>

  </div>
</div>
</nav>
<!-- End Navbar Part -->
