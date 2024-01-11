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

