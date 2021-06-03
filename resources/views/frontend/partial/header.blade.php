<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Charity Management System </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.css">

    <!-- Template main Css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    <!-- Modernizr -->
    <script src="{{ asset('assets') }}/js/modernizr-2.6.2.min.js"></script>


</head>

<body>


    <header class="main-header">


        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">

                            <ul class="list-unstyled list-inline header-contact">
                                <li> <i class="fa fa-phone"></i> <a href="Phone:">+8801XXXXXXXXX</a></li>
                                <li> <i class="fa fa-envelope"></i> <a
                                        href="mailto:fahmida35-1890@diu.edu.bd">fahmida35-1890@diu.edu.bd</a> </li>
                            </ul> <!-- /.header-contact  -->

                        </div>

                        <div class="col-sm-6 col-xs-12 text-right">

                            <ul class="list-unstyled list-inline header-social">

                                <li> <a href="https://web.facebook.com/"> <i class="fa fa-facebook"></i> </a> </li>
                                {{-- <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li> --}}
                                {{-- <li> <a href="#"> fahmida35-1890@diu.edu.bd<i class="fa fa-google"></i>  </a> </li> --}}
                                {{-- <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li> --}}
                                {{-- <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li> --}}
                            </ul> <!-- /.header-social  -->

                        </div>


                    </div>
                </div>

            </div>

            <div class="navbar-main">

                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>

                        <a class="navbar-brand" href="/"><img style="width: 115px; margin-top: -7px;"
                                src="{{ asset('assets') }}/images/sadaka-logo.png" alt=""></a>

                    </div>

                    <div id="navbar" class="navbar-collapse collapse pull-right">

                        <ul class="nav navbar-nav">

                            <li><a class="is-active" href="/">HOME</a></li>
                            <li><a href="#">ABOUT</a></li>
                            
                            <li><a href="#">CONTACT US</a></li>
                            @guest
                                <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Want to
                                        be a Volunteer !</a></li>
                                <li>
                                    <a href="/login">Login</a>
                                </li>
                            @endguest
                            @role('Admin|Volunteer')
                            <li class="btn-group">
                                <a href="javascript::void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    {{ auth()->user()->name }} <i class="fa fa-chevron-circle-down"></i>
                                </a>
                                <div class="dropdown-menu" style="color: black;">
                                    <a class="btn btn-link dropdown-item"
                                        href="{{ route('home.dashboard') }}">Dashboard</a>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="btn btn-link" type="submit">Logout</button>
                                    </form>
                                </div>
                            </li>
                            @elserole('Donor')

                            <li class="btn-group">
                                <a href="javascript::void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    {{ auth()->user()->name }} <i class="fa fa-chevron-circle-down"></i>
                                </a>
                                <div class="dropdown-menu" style="color: black;">
                                    @hasanyrole("Admin|Volunteer")
                                    <a class="btn btn-link dropdown-item"
                                        href="{{ route('home.dashboard') }}">Dashboard</a>
                                    @endhasanyrole
                                    @if (auth()->user()->status == 0)
                                        <a class="btn btn-link dropdown-item" href="{{ route('volunteer') }}">
                                            Want to be a Volunteer !
                                        </a>
                                    @else
                                        <a class="btn btn-link dropdown-item" href="javascript::void(0)">
                                            Already requested
                                        </a>
                                    @endif
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="btn btn-link" type="submit">Logout</button>
                                    </form>
                                </div>
                            </li>
                            @endrole


                        </ul>

                    </div> <!-- /#navbar -->

                </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header> <!-- /. main-header -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-box" action="{{ route('register') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <h3 class="form-box success">Registration for Volunteer</h3><br>
                        <input type="hidden" name="status" value="on">
                        <div class="form-group ">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John doe"
                                name="name">
                            {{ $errors->first('name') }}
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone"
                                placeholder="+8801XXXXXXXXX">
                            {{ $errors->first('phone') }}
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                placeholder="john.doe@mail.com">
                            {{ $errors->first('email') }}
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password"
                                placeholder="**********">
                            {{ $errors->first('password') }}
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                name="password_confirmation" placeholder="**********">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">NID No</label>
                            <input type="text" class="form-control" name="nid"
                                placeholder="give your national Id card no">
                            {{ $errors->first('nid') }}
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Upload an Image</label>
                            <input type="file" id="exampleFormControlInput1" name="image" class="form-control">
                            {{ $errors->first('image') }}
                        </div>
                        <br>


                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </div>


                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
