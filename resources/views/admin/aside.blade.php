    <nav id="sidebar" class=" col-md-3 col-lg-2 d-md-block bg-light sidebar p-3 d-flex justify-content-between  bg-dark">
    <h2 class="text-primary m-0"><i class="fa fa-utensils me-2"></i>Restoran</h2>
    <hr class="text-white">
    <div class="position-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('home') }}">
            <i class="bi bi-speedometer"></i> <span class="ms-2">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="#">
            <i class="bi bi-diagram-3-fill"></i>
        <span class="ms-2">Items</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">
            <i class="bi bi-clipboard-check-fill"></i>
            <span class="ms-2">Reservations</span>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('userAdmin') }}">
            <i class="bi bi-person-lines-fill"></i>
            <span class="ms-2">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('contactAdmin') }}">
            <i class="bi bi-envelope-at-fill"></i>
            <span class="ms-2">Contacts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('edit_profile') }}">
            <i class="bi bi-pencil-square"></i>
            <span class="ms-2">Edit profile</span>
          </a>
        </li>
        <li class="nav-item">

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn text-white">
                <i class="bi bi-box-arrow-left"></i><span class="ms-3">Logout</span>
                </button>
            </form>

        </li>
      </ul>
    </div>
  </nav>

