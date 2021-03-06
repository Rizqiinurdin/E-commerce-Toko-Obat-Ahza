<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-store fixed-top navbar fixed-top"
data-aos="fade-down">
<div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="/images/logo.svg" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('categories') }}">Categories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Rewards</a>
        </li>
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-success nav-link px-4 text-white" href="{{ route('login') }}">Sign In</a>
        </li>
        @endguest
        </ul>
    </div>

    @auth
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
            <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown">
                <img
                src="/images/user_pc.png"
                alt=""
                class="rounded-circle mr-2 profile-picture"
                />
                Hi, {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
                <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            {{-- Desktop Menu --}}
            <li class="nav-item">
                <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                @php
                    $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                @endphp
                :@if ($carts > 0)
                <img src="/images/cart-filled.svg" alt="">
                <div class="card-badge">{{ $carts }}</div>
                @else
                <img src="/images/shopping 1.svg" alt="">
                @endif
                </a>
            </li>
            {{-- End Desktop Menu --}}
        </ul>
        {{-- Mobile Menu --}}
        <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    Hi, {{ Auth::user()->name }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cart') }}" class="nav-link d-inline-block">
                    Cart
                </a>
            </li>
        </ul>
    @endauth
</div>
</nav>
