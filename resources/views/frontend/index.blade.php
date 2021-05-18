@include('frontend.partial.header')

<!-- Carousel
================================================== -->
<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

        <div class="item active">

            <img src="{{ asset('assets') }}/images/slider/home-slider1.jpg" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                    <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
                    {{-- <a href="{{ route('home.donate') }}" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow"
                        data-toggle="modal" data-target="#donateModal">DONATE NOW</a> --}}
                    <a href="{{ route('home.donate') }}" class="btn btn-lg btn-secondary hidden-xs">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->


        <div class="item ">

            <img src="{{ asset('assets') }}/images/slider/home-slider2.jpg" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                    <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal"
                        data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->




        <div class="item ">

            <img src="{{ asset('assets') }}/images/slider/home-slider3.jpg" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow">A penny is a lot of money, if you have not got
                        a penny.</h2>
                    <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                    {{-- <a href="{{ route('home.donate') }}" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow"
                        data-toggle="modal" data-target="#donateModal">DONATE NOW</a> --}}
                    <a href="{{ route('home.donate') }}" class="btn btn-lg btn-secondary hidden-xs">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->

    </div>

    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div><!-- /.carousel -->

<div class="section-home about-us fadeIn animated">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-sm-6">

                <div class="about-us-col">

                    <div class="col-icon-wrapper">
                        <img src="{{ asset('assets') }}/images/icons/our-mission-icon.png" alt="">
                    </div>
                    <h3 class="col-title">our mission</h3>
                    <div class="col-details">

                        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor
                            sit amet consect</p>

                    </div>
                    <a href="#" class="btn btn-primary"> Read more </a>

                </div>

            </div>


            <div class="col-md-3 col-sm-6">

                <div class="about-us-col">

                    <div class="col-icon-wrapper">
                        <img src="{{ asset('assets') }}/images/icons/make-donation-icon.png" alt="">
                    </div>
                    <h3 class="col-title">Make donations</h3>
                    <div class="col-details">

                        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor
                            sit amet consect</p>

                    </div>
                    <a href="#" class="btn btn-primary"> Read more </a>

                </div>

            </div>


            <div class="col-md-3 col-sm-6">

                <div class="about-us-col">

                    <div class="col-icon-wrapper">
                        <img src="{{ asset('assets') }}/images/icons/help-icon.png" alt="">
                    </div>
                    <h3 class="col-title">Help & support</h3>
                    <div class="col-details">

                        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor
                            sit amet consect</p>

                    </div>
                    <a href="#" class="btn btn-primary"> Read more </a>

                </div>

            </div>


            <div class="col-md-3 col-sm-6">

                <div class="about-us-col">

                    <div class="col-icon-wrapper">
                        <img src="{{ asset('assets') }}/images/icons/programs-icon.png" alt="">
                    </div>
                    <h3 class="col-title">our programs</h3>
                    <div class="col-details">

                        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor
                            sit amet consect</p>

                    </div>
                    <a href="#" class="btn btn-primary"> Read more </a>

                </div>

            </div>



        </div>

    </div>

</div> <!-- /.about-us -->

<div class="section-home home-reasons">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="reasons-col animate-onscroll fadeIn">

                    <img src="{{ asset('assets') }}/images/reasons/we-fight-togother.jpg" alt="">

                    <div class="reasons-titles">

                        <h3 class="reasons-title">We fight together</h3>
                        <h5 class="reason-subtitle">We are humans</h5>

                    </div>

                    <div class="on-hover hidden-xs">

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque
                            facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil
                            molestias, dignissimos sint consequuntur. Officia, fuga.</p>


                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque
                            facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil
                            molestias, dignissimos sint consequuntur. Officia, fuga.</p>

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque
                            facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil
                            molestias, dignissimos sint consequuntur. Officia, fuga.</p>

                    </div>
                </div>

            </div>


            <div class="col-md-6">

                <div class="reasons-col animate-onscroll fadeIn">

                    <img src="{{ asset('assets') }}/images/reasons/we-care-about.jpg" alt="">

                    <div class="reasons-titles">

                        <h3 class="reasons-title">WE care about others</h3>
                        <h5 class="reason-subtitle">We are humans</h5>

                    </div>

                    <div class="on-hover hidden-xs">

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque
                            facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil
                            molestias, dignissimos sint consequuntur. Officia, fuga.</p>


                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque
                            facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil
                            molestias, dignissimos sint consequuntur. Officia, fuga.</p>

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque
                            facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil
                            molestias, dignissimos sint consequuntur. Officia, fuga.</p>

                    </div>


                </div>

            </div>


        </div>



    </div>


</div> <!-- /.home-reasons -->

<div class="section-home our-causes animate-onscroll fadeIn">

    <div class="container">

        <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

        <div class="row">

            <div class="col-md-3 col-sm-6">

                <div class="cause">

                    <img src="{{ asset('assets') }}/images/causes/cause-hunger.jpg" alt="" class="cause-img">

                    <div class="progress cause-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                            aria-valuemax="100" style="width: 30%;">
                            10$ / 500$
                        </div>
                    </div>

                    <h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4>
                    <div class="cause-details">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra
                        elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                    </div>

                    <div class="btn-holder text-center">

                        {{-- <a href="{{route('home.donate')}}" class="btn btn-primary"> DONATE
                            NOW</a> --}}
                        <a href="{{ route('home.donate') }}" class="btn btn-primary"> DONATE
                            NOW</a>

                    </div>



                </div> <!-- /.cause -->

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="cause">

                    <img src="{{ asset('assets') }}/images/causes/cause-education.jpg" alt="" class="cause-img">

                    <div class="progress cause-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100" style="width: 60%;">
                            400$ / 700$
                        </div>
                    </div>

                    <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>
                    <div class="cause-details">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra
                        elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="{{ route('home.donate') }}" class="btn btn-primary"> DONATE
                            NOW</a>

                    </div>



                </div> <!-- /.cause -->

            </div>


            <div class="col-md-3 col-sm-6">

                <div class="cause">

                    <img src="{{ asset('assets') }}/images/causes/cause-rights.jpg" alt="" class="cause-img">

                    <div class="progress cause-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width: 40%;">
                            400$ / 1000$
                        </div>
                    </div>

                    <h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4>
                    <div class="cause-details">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra
                        elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="{{ route('home.donate') }}" class="btn btn-primary"> DONATE
                            NOW</a>

                    </div>



                </div> <!-- /.cause -->

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="cause">

                    <img src="{{ asset('assets') }}/images/causes/cause-culture.jpg" alt="" class="cause-img">

                    <div class="progress cause-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100" style="width: 60%;">
                            400$ / 700$
                        </div>
                    </div>

                    <h4 class="cause-title"><a href="#">ARTS AND CULTURE </a></h4>
                    <div class="cause-details">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra
                        elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                    </div>

                    <div class="btn-holder text-center">

                        <a href="{{ route('home.donate') }}" class="btn btn-primary"> DONATE
                            NOW</a>

                    </div>



                </div> <!-- /.cause -->

            </div>

        </div>

    </div>

</div> <!-- /.our-causes -->


<div class="section-home our-causes animate-onscroll fadeIn">

    <div class="container">

        <h2 class="title-style-1">Our Events <span class="title-under"></span></h2>

        <div class="row">
            @foreach ($events as $event)
                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="{{ asset($event->image) }}" alt="{{ $event->title }}" class="cause-img">


                        <h4 class="cause-title"><a href="#">{{ $event->title }} </a></h4>
                        <div class="cause-details">
                            {{ $event->description }}
                        </div>
                        @if ($event->isComing())
                            <h4 class="cause-title">Upcoming Event</h4>
                        @else
                            <h4 class="cause-title">Completed Event</h4>
                        @endif
                        <h4 class="cause-title">{{ Carbon\Carbon::create($event->event_date)->diffForHumans() }}</h4>
                        <div class="btn-holder text-center">

                            <a href="{{ route('home.donate') }}" class="btn btn-primary"> DONATE
                                NOW</a>

                        </div>



                    </div> <!-- /.cause -->

                </div>
            @endforeach


        </div>

    </div>

</div> <!-- /.our-causes -->


<div class="section-home our-causes animate-onscroll fadeIn">

    <div class="container">

        <h2 class="title-style-1">Top Donor <span class="title-under"></span></h2>

        <div class="row">
            @foreach (\App\Models\User::role('Donor')->where('donation', '!=', '0')->orderBy('donation', 'DESC')->take(4)->get()
    as $index => $user)
                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <img src="{{ asset($user->image ?? 'assets/img/user.png') }}" alt="{{ $user->name }}"
                            class="cause-img">


                        <h4 class="cause-title"><a href="#">{{ $user->name }} </a></h4>
                        <div class="cause-details">
                            {{ donationQuate($index) }}
                        </div>



                    </div> <!-- /.cause -->

                </div>
            @endforeach


        </div>

    </div>

</div> <!-- /.our-causes -->






<div class="section-home our-sponsors animate-onscroll fadeIn">

    <div class="container">

        <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>

        <ul class="owl-carousel list-unstyled list-sponsors">

            <li> <img src="{{ asset('assets') }}/images/sponsors/bus.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/wikimedia.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/one-world.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/wikiversity.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/united-nations.png" alt=""></li>

            <li> <img src="{{ asset('assets') }}/images/sponsors/bus.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/wikimedia.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/one-world.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/wikiversity.png" alt=""></li>
            <li> <img src="{{ asset('assets') }}/images/sponsors/united-nations.png" alt=""></li>

        </ul>

    </div>

</div> <!-- /.our-sponsors -->





<footer class="main-footer">

    <div class="footer-top">

    </div>


    <div class="footer-main">
        <div class="container">

            <div class="row">
                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">About us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <p>
                                <strong>Sadaka</strong> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros
                                rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque
                                vel, maximus lacinia urna.
                            </p>

                            <p>
                                ILorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis
                                viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus
                                lacinia urna.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                        <div class="footer-content">
                            <ul class="tweets list-unstyled">
                                <li class="tweet">

                                    20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
                                    http://t.co/fTSazikPd4

                                </li>

                                <li class="tweet">

                                    20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
                                    http://t.co/fTSazikPd4

                                </li>

                                <li class="tweet">

                                    20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
                                    http://t.co/fTSazikPd4

                                </li>

                            </ul>
                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <div class="footer-form">

                                <div class="footer-form">

                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message"
                                                required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send
                                                message</button>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="clearfix"></div>



            </div>


        </div>


    </div>

    <div class="footer-bottom">

        <div class="container text-right">
            Sadaka @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Ouarmedia</a>
        </div>
    </div>

</footer> <!-- main-footer -->




<!-- Donate Modal -->
<div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
            </div>
            <div class="modal-body">

                <form class="form-donation">

                    <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>
                    </h3>

                    <div class="row">

                        <div class="form-group col-md-12 ">
                            <input type="text" class="form-control" id="amount" placeholder="AMOUNT(€)">
                        </div>

                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="firstName" placeholder="First name*">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                        </div>
                    </div>


                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Email*">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>

                    </div>


                    <div class="row">

                        <div class="form-group col-md-12">
                            <textarea cols="30" rows="4" class="form-control" name="note"
                                placeholder="Additional note"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" name="donateNow">DONATE
                                NOW</button>
                        </div>

                    </div>





                </form>

            </div>
        </div>
    </div>

</div> <!-- /.modal -->





<!--  Scripts
================================================== -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{ asset('assets') }}/js/jquery-1.11.1.min.js"><\/script>')

</script>

<!-- Bootsrap javascript file -->
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>

<!-- owl carouseljavascript file -->
<script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>

<!-- Template main javascript -->
<script src="{{ asset('assets') }}/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');

</script>

</body>

</html>
