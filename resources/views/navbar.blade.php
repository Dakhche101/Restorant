@guest
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
    <!-- <img src="img/logo.png" alt="Logo"> -->

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0 pe-4">
        <a href="{{ route('home') }}" class="nav-item nav-link" id="home">Home</a>
        <a href="{{ route('about') }}" class="nav-item nav-link" id="about">About</a>
        <a href="{{ route('service') }}" class="nav-item nav-link" id="service">Service</a>
        <a href="{{ route('menu') }}" class="nav-item nav-link" id="menu">Menu</a>

        <a href="{{ route('contact') }}" class="nav-item nav-link" id="contact">Contact</a>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
</div>
</nav>
@endguest
@auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('about') }}" class="nav-item nav-link" id="about">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link" id="service">Service</a>
            <a href="{{ route('menu') }}" class="nav-item nav-link" id="menu">Menu</a>

            <a href="{{ route('contact') }}" class="nav-item nav-link" id="contact">Contact</a>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="bg-dark  dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->user_type==="1")
                        <a class="dropdown-item text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                    @endif
                    <a class="dropdown-item text-white" href="{{ route('edit_profile') }}">Profile</a>
                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </div>
        <a href="{{ route('booking') }}" class="btn btn-primary py-2 px-4">Book A Table</a>

    </div>

    </nav>
@endauth

