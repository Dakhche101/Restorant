<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Restoran-Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('admin.style')


    <style>
        .home{
            border:2px solid black;
            width: 100%;
            height: 100vh;
        }
        #sidebar{
            height: 100vh;
        }

    </style>
</head>
<body>
    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button type="submit">logout</button>
    </form> --}}
    <div class="container-fluide ">
        <div class="row">
            @include('admin.aside')
            @include('admin.main')
        </div>

    </div>
</body>
</html>
