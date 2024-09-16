<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle }}</title>
    <link rel="shortcut icon" type="image/png" href="{{getImage(getFilePath('logoIcon') .'/favicon.png')}}">

    @include('admin.include.css')
    @stack('style-lib')
    @stack('style')
    <style>

    </style>
</head>

<body>
    <div id="app">
        @include('ego.include.header')
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm ">
            <div class="container">

                <a class="navbar-brand" href="{{route('user.home')}}">
                    <h1>Dashboard</h1>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('user.login'))
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('user.register'))
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Ticket
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('ticket.open') }}">
                                    @lang('Create New')
                                </a>
                                <a class="dropdown-item" href="{{ route('ticket.index') }}">
                                    @lang('My Ticket')
                                </a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Order
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    {{ __('Order History') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Wishlist
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    {{ __('History') }}
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark" href="{{ route('user.transactions') }}" role="button">
                                Transaction
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->fullname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user.change.password') }}">
                                    @lang('Change Password')
                                </a>
                                <a class="dropdown-item" href="{{ route('user.upload.prescription') }}">
                                    @lang('Upload Prescription')
                                </a>
                                <a class="dropdown-item" href="{{ route('user.profile.setting') }}">
                                    @lang('Profile Setting')
                                </a>
                                <a class="dropdown-item" href="{{ route('user.twofactor') }}">
                                    @lang('2FA Security')
                                </a>
                                <a class="dropdown-item" href="{{ route('user.logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('user.logout') }}" method="get" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 ">
            @include('partials.notify')
            @yield('content')
        </main>
    </div>
    @include('ego.include.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/global/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/global/js/bootstrap.bundle.min.js')}}"></script>

    @stack('script-lib')

    @stack('script')


</body>

</html>