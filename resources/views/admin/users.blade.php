<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.style')
    <style>
        table{
            overflow-y:scroll;
        }
    </style>
</head>
<body>
    <div class="container-fluide ">
        <div class="row">
            @include('admin.aside')
            <div class="col-md-9 ms-sm-auto col-lg-10">
                <div class="row">
                    <h2 class="col-6 pt-3 bg-light">Welcome, {{ Auth::user()->name }}</h2>
                    <span id="liveDateTime" class=" col-6 pt-4 h5  ps-6 text-end"></span>
                </div>
                <hr>
                <div class="container-fluide ">
                    <div class="row">
                        <h1 class="text-primary col-12 text-center">users</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            @if (count($users)!=0)
                                <table class="table  table-hover table-sm border">
                                    <caption>List of users</caption>
                                    <thead class="table-success ">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user )

                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    @if ($user->user_type==1)
                                                        <span class="text-danger">Admin</span>
                                                    @else
                                                        <span>User</span>
                                                    @endif
                                                </td>
                                                <td class="d-flex  ">
                                                    <form class="ms-2" action="{{ route('roleUser',['id'=>$user->id]) }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        @if ($user->user_type==1)
                                                            <button class="btn btn-primary text-white" data-bs-toggle="tooltip" title="Remove Admin Role"><i class="bi bi-person-x "></i></button>
                                                        @else
                                                            <button class="btn btn-primary text-white" data-bs-toggle="tooltip" title="Add Admin Role"><i class="bi bi-person-fill-lock"></i></button>
                                                        @endif
                                                    </form>
                                                    <form class="ms-2" action="{{ route('DeleteUserAdmin',['id'=>$user->id]) }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-danger" data-bs-toggle="tooltip" title="Delete!"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h1 class="text-center">No users</h1>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateLiveDateTime() {
            var dateElement = document.getElementById('liveDateTime');

            // Create a new Date object to get the current date and time
            var currentDate = new Date();

            // Format the date and time
            var formattedDateTime = currentDate.toLocaleString();

            // Update the content of the element with the formatted date and time
            dateElement.innerHTML = formattedDateTime;
        }

        // Call the function immediately to set the initial value
        updateLiveDateTime();

        // Update the date and time every second (1000 milliseconds)
        setInterval(updateLiveDateTime, 1000);
        </script>

        @include('admin.scripts')
</body>
</html>
