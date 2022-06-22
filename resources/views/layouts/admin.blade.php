<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Bootstrap CSS -->
    @stack('prepend-script')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="/style/main.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.css"/>
    @stack('addon-script')

    <title>@yield('title')</title>
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/admin.png" alt="" class="my-4" style="width: 150px">
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin-dashboard') }}" class="list-group-item list-group-item-action">
                        Dashboard
                    </a>
                    <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/product')) ? 'active' : '' }}">
                        Product
                    </a>
                    <a href="{{ route('product-gallery.index') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/product-gallery*')) ? 'active' : '' }}">
                        Galleries
                    </a>
                    <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : '' }}">
                        Categories
                    </a>
                    <a href="{{ route('transaction.index') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/transaction*')) ? 'active' : '' }}">
                        Transactions
                    </a>
                    <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action  {{ (request()->is('admin/user*')) ? 'active' : '' }}">
                        Users
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Sign Out
                    </a>
                </div>
            </div>
            <!-- Page Content -->
                <div id="page-content-wrapper">
                    <nav
                    class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
                    data-aos="fade-down"
                    >
                    <button
                        class="btn btn-secondary d-md-none mr-auto mr-2"
                        id="menu-toggle"
                    >
                        &laquo; Menu
                    </button>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto d-none d-lg-flex">
                        <li class="nav-item dropdown">
                            <a
                            class="nav-link"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >
                            <img
                                src="/images/icon-user.png"
                                alt=""
                                class="rounded-circle mr-2 profile-picture"
                            />
                            Hi, {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            {{-- <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item" href="/">Logout</a>
                            </div>
                        </li>

                        </ul>
                        <!-- Mobile Menu -->
                        <ul class="navbar-nav d-block d-lg-none mt-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            Hi,  {{Auth::user()->name}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-inline-block" href="#">
                            Cart
                            </a>
                        </li>
                        </ul>
                    </div>
                    </nav>
                {{-- Content --}}
                @yield('content')
            </div>
        </div>
    </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        @stack('prepend-script')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.js"/></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        @stack('addon-script')
</body>
</html>
