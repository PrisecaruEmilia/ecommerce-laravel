{{-- <ul class="navbar-nav my-2 my-lg-0 ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cart.index') }}">Cart
            @if(Cart::instance('default')->count() > 0)
                <span class="badge badge-pill badge-warning"> {{ Cart::instance('default')->count() }}</span>
            @endif
        </a>
    </li>
</ul> --}}

<ul class="navbar-nav my-2 my-lg-0 ml-auto">
    @foreach($items as $menu_item)
        <li class="nav-item">
            <a class="nav-link" href="{{ $menu_item->link() }}">
                {{ $menu_item->title }}

                {{-- @if ($menu_item->title === 'Cart')
                    @if(Cart::instance('default')->count() > 0)
                        <span class="badge badge-pill badge-warning"> {{ Cart::instance('default')->count() }}</span>
                    @endif
                @endif --}}
            </a>
        </li>
    @endforeach
    @guest
        <li class="nav-item">
            <a href="{{ route('register')}}" class="nav-link">Register
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Login
            </a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.edit') }}">MyAccount
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> --}}
    @endguest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cart.index') }}">Cart
            @if(Cart::instance('default')->count() > 0)
                <span class="badge badge-pill badge-warning"> {{ Cart::instance('default')->count() }}</span>
            @endif
        </a>
    </li>
</ul>
