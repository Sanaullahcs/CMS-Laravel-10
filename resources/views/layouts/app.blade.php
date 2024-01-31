<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel Admin Portal') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark  shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <!-- Add your left side navigation items here -->
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                @auth
                <div class="sidebar d-md-block bg-dark">
                    <a href="#"
                        class="d-flex align-items-center justify-content-center text-white text-decoration-none mb-4">
                        <img src="{{ asset('images/medspalogo.png') }}" alt="Your Logo" class="me-2 logo-med">
                    </a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ url('/admin/dashboard') }}" class="nav-link text-white">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/blogs') }}" class="nav-link text-white">
                                <i class="fas fa-blog me-2"></i> Blogs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/gallery') }}" class="nav-link text-white">
                                <i class="fas fa-image me-2"></i> Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/services') }}" class="nav-link text-white">
                                <i class="fas fa-cogs me-2"></i> Services
                            </a>
                        </li>
                        <!-- Add more sidebar links here -->
                    </ul>
                </div>
                @endauth

                <!-- Main Content -->
                <main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</body>

<style>
/* Custom styles for the navigation bar */
.navbar {
    border-radius: 50px;
    margin-left: 20%;
    margin-right: 5%;
    margin-top: 10px;
    padding: 10px 0;
    background-color: #A75E5B;
    /* Change to your desired color */
    z-index: 0;
}

.logo-med {
    width: 150px !important;
    text-align: center;
}

.navbar-toggler-icon {
    color: #fff;
}

.navbar-nav li.nav-item {
    margin-right: 10px;
}

.navbar-nav li.nav-item a.nav-link {
    font-size: 18px;
    color: #fff;
    transition: color 0.3s;
}

.navbar-nav li.nav-item a.nav-link:hover {
    color: #ccc;
}

/* Style the dropdown menu */
.dropdown-menu {
    background-color: #fff;
    border: none;
}

.dropdown-item {
    color: #333;
}

.dropdown-item:hover {
    background-color: #f0f0f0;
    color: #333;
}

/* Sidebar styles */
.sidebar {
    width: 280px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px;
    background-color: #402524 !important;
    color: #fff;
}

.sidebar a {
    color: #fff;
    text-decoration: none;
}

.sidebar a:hover {
    color: #ccc;
}
</style>

</html>