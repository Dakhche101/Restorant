<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoran-profile</title>
    <link rel="icon" href="/restaurant.png" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-xxl bg-white p-0">
        {{-- <!-- Spinner Start --> --}}
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        {{-- <!-- Spinner End --> --}}


        {{-- <!-- Navbar & Hero Start --> --}}
        <div class="container-xxl position-relative p-0">
            @include('navbar')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">

            </div>
        </div>
        {{-- <!-- Navbar & Hero End --> --}}


{{-- editing profil --}}
        <div class="container-fluid">
            <div class="edit_info" style="border:2px dolid black">

            </div>
            <div class="edit_password">
                <form action="">

                </form>
            </div>
        </div>
@if (session('message'))
<script>
    Swal.fire({
  title: "Message",
  text: "{{ session('message')}}",
  icon: "success"
});
</script>


@elseif (session('er'))
<script>
    Swal.fire({
  title: "Message",
  text: "{{ session('er')}}",
  icon: "error"
});
</script>

@endif


{{-- editing profil --}}
<div class="container-xxl py-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Edit Profile</h5>
        </div>
        <div class="row g-4">

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form method="POST" action="{{ route('editinfo') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" value="{{ Auth::user()->name }}" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" value="{{ Auth::user()->email }}"required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-40 py-3" type="submit">save</button>
                                <button class="btn btn-danger w-40 py-3" type="reset">reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form method="POST" action="{{ route('updatePassword') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Your password" name="old_password" required>
                                    <label for="password">Your Password</label>
                                    @error('password_confirmation')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="newpassword" placeholder="New Password" name="password"  required>
                                    <label for="newpassword">New Password</label>
                                    @error('password_confirmation')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" name="password_confirmation"  required>
                                    <label for="confirmpassword">Confirm Password</label>
                                    @error('password_confirmation')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-40 py-3" type="submit">save</button>
                                <button class="btn btn-danger w-40 py-3" type="reset">reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- editing profil --}}




        @include('footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>














        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
