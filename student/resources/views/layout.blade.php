<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('students') }}">Students</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('students/create') }}">Inserisci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('getbustime') }}">Bus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('timetable') }}">Time</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('sendmail') }}">Mail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('musastudents') }}">Musa</a>
                    </li>
                </ul>

                <form method="post" action="{{ url('search') }}">
                    @csrf
                    <input type="text" name="cerca" id="cerca">
                    <input type="submit" value="Cerca">
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
<footer class="bg-light text-center">
  
    <!-- Copyright -->
    <div class="text-center p-3" >
      © <?php echo date("Y"); ?> Copyright:
      {{ env('APP_NAME') }}
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
</body>

</html>
