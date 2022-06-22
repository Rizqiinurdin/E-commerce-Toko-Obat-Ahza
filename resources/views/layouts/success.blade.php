<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />

{{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

<title>@yield('title')</title>
</head>

<body>
    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')



</body>

</html>
