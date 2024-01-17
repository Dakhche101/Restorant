<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Your content goes here -->
    <div class="row">
        <h2 class="col-6 pt-3 bg-light">Welcome, {{ Auth::user()->name }}</h2>
    <span id="liveDateTime" class=" col-6 pt-4 h5  ps-6 text-end"></span>
    </div>

    <hr>
    <br>
    <div class="container-fluide ">
        <div class="row">
            <div class="col-6 border">
                <p class="h4">todo-list</p>
                <div>
                    <div class="container-fluide">
                        <div class="row">
                            <input class="col-10" type="text" name="" id="">
                            <button class="col-2">Add</button>
                        </div>
                    </div>
                    <div class="container-fluide d-flex border border-danger justify-content-between p-3">
                        <div class="row">
                            <h1 class="col-10">fdkjfkdjfkdjf</h1>
                            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Edit Profile</h5>
                            <div class="col-2">
                                <button>V</button>
                                <button>X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 border">
                <h1>fkdfld</h1>
            </div>
        </div>
    </div>

  </main>
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

