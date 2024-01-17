<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.style')
    <style>
       #table{
        overflow-y: scroll;
        max-height: 60vh;
       }
    </style>
</head>
<body>
    <div class="container-fluide ">
        <div class="row">
            @include('admin.aside')
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row">
                    <h2 class="col-6 pt-3 bg-light">Welcome, {{ Auth::user()->name }}</h2>
                    <span id="liveDateTime" class=" col-6 pt-4 h5  ps-6 text-end"></span>
                </div>
                <hr>
                <div class="container-fluide ">
                    <div class="row">
                        <h1 class="text-primary col-12 text-center">Contacts</h1>
                    </div>
                    <div class="row border" id="table">
                        <div class="col-12  ">
                            @if (count($contacts)!=0)
                                <table class="table table-hover table-sm border">
                                    <caption>List of Contacts</caption>
                                    <thead class="table-dark ">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date Time</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact )
                                            <tr>
                                                <td class="text-break col-1">{{$contact->name}}</td>
                                                <td class="col-2">{{$contact->email}}</td>
                                                <td class="text-break col-3" >{{$contact->subject}}</td>
                                                <td class="text-break col-4">{{$contact->message}}</td>
                                                <td class="col-1">{{$contact->created_at}}</td>
                                                <td class="col-1 text-center">
                                                    <form action="{{ route('DeleteContactAdmin',['id'=>$contact->id]) }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h1 class="text-center">No message</h1>
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
