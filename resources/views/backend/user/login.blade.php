<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css') }}/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('assets/css') }}/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('assets/css') }}/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('assets/css') }}/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('assets/css') }}/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <link href="{{ asset('assets/css') }}/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('assets/css') }}/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('assets/css') }}/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('assets/css') }}/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="">
    <title>Document</title>
</head>

<body>

    <form class="form-box" action="{{ route('login') }}" method="post">

        <h2 style="color: Green">Please Login First</h2>

        @csrf
        <label for="name">Email</label> <br>
        <input type="email" name="email" placeholder=""><br>
        {{ $errors->first('email') }}<br>
        <label for="password">Password</label> <br>
        <input class="" type="text" name="password" placeholder=""><br>
        {{ $errors->first('password') }}<br>
        <label for=""></label><br>

        <input class="btn btn-primary" type="submit" name="submit" value="Log-In">


        <div class="form-row">
            <a href="{{ url('/sign-in/github') }}" class="btn btn-outline-dark btn-block fa fa-github p-3">Sign in
                with
                GitHub</a>
            <a href="{{ url('/sign-in/facebook') }}" class="btn btn-outline-dark btn-block fa fa-facebook p-3">Sign
                in
                with Facebook</a>
        </div>

    </form>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>
