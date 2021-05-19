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

                    {{-- <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2> --}}
                    <h2 class="carousel-title bounceInDown animated slow">আপনার সহযোগিতা তাদের খুব প্রয়োজন</h2>
                    {{-- <h5 class="carousel-title bounceInDown animated slow">(আপনার সাহায্য তাদের খুব প্রয়োজন)</h5> --}}
                    <h4 class="carousel-subtitle bounceInUp animated slow ">তাদের কথাও একটু ভাবুন !</h4>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal"
                        data-target="#donateModal">সহযোগীতা করুন
                    </a>

                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->


        <div class="item ">

            <img src="{{ asset('assets') }}/images/slider/home-slider2.jpg" height="650px" alt="">

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

                    <h2 class="carousel-title bounceInDown animated slow">আপনার সহোযোগীতাই পারে তাদের মুখে হাসি ফোটাতে
                    </h2>
                    <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal"
                        data-target="#donateModal">DONATE NOW</a>

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

                        <p>Tarunyar Joy Organization is working for those people who are living under poverty and rural
                            area.To serve families in the poorest communities in Bangladesh</p>

                    </div>
                    {{-- <a href="#" class="btn btn-primary"> Read more </a> --}}

                </div>

            </div>


            <div class="col-md-3 col-sm-6">

                <div class="about-us-col">

                    <div class="col-icon-wrapper">
                        <img src="{{ asset('assets') }}/images/icons/make-donation-icon.png" alt="">
                    </div>
                    <h3 class="col-title">Make donations</h3>
                    <div class="col-details">

                        <p>For Donation Contact please ..</p>
                        <i class="fa fa-phone">+88 01799943763</i>
                        <i class="fa fa-mail-forward">tarunyarjoy@gmail.com</i>

                    </div>
                    {{-- <a href="#" class="btn btn-primary"> Read more </a> --}}

                </div>

            </div>


            <div class="col-md-3 col-sm-6">

                <div class="about-us-col">

                    <div class="col-icon-wrapper">
                        <img src="{{ asset('assets') }}/images/icons/help-icon.png" alt="">
                    </div>
                    <h3 class="col-title">Help & support</h3>
                    <div class="col-details">

                        <p>Please make a donation and help us to continuing our all programs</p>

                    </div>
                    <a href="#" class="btn btn-primary"> Registration For Membership </a>

                </div>

            </div>


            <div class="col-md-3 col-sm-6">

                <div class="about-us-col">

                    <div class="col-icon-wrapper">
                        <img src="{{ asset('assets') }}/images/icons/programs-icon.png" alt="">
                    </div>
                    <h3 class="col-title">our programs</h3>
                    <div class="col-details">

                        <p>Winter Aid,Helping Flood affected people,Trying to support people for Corona (COVID-19)</p>

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

                        <p> We believe that if we work together we can help a huge number of people</p>

                        <p>Let's Do something for poorest people in this community</p>
                        <p>Join With us</p>
                    </div>
                </div>

            </div>


            <div class="col-md-6">

                <div class="reasons-col animate-onscroll fadeIn">

                    <img src="{{ asset('assets') }}/images/reasons/we-care-about.jpg" alt="">

                    <div class="reasons-titles">

                        <h3 class="reasons-title">WE care about others</h3>
                        <h5 class="reason-subtitle">We try to reach the unreached</h5>

                    </div>

                    <div class="on-hover hidden-xs">

                        <p> We always try to helping people by going door to door of poorest people in the
                            community.Oldest person and who has no children for taking care , we help them.</p>


                        <p>We believe that if we work together we can help a huge number of people</p>

                        <p>Please join with us </p>
                    </div>


                </div>

            </div>


        </div>



    </div>


</div> <!-- /.home-reasons -->

{{-- <div class="section-home our-causes animate-onscroll fadeIn"> --}}

{{-- <div class="container"> --}}

{{-- <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2> --}}

{{-- <div class="row"> --}}

{{-- <div class="col-md-3 col-sm-6"> --}}

{{-- <div class="cause"> --}}

{{-- <img src="{{asset('assets')}}/images/causes/cause-hunger.jpg" alt="" class="cause-img"> --}}

{{-- <div class="progress cause-progress"> --}}
{{-- <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"> --}}
{{-- 10$ / 500$ --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4> --}}
{{-- <div class="cause-details"> --}}
{{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna. --}}
{{-- </div> --}}

{{-- <div class="btn-holder text-center"> --}}

{{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a> --}}

{{-- </div> --}}



{{-- </div> <!-- /.cause --> --}}

{{-- </div> --}}

{{-- <div class="col-md-3 col-sm-6"> --}}

{{-- <div class="cause"> --}}

{{-- <img src="{{asset('assets')}}/images/causes/cause-education.jpg" alt="" class="cause-img"> --}}

{{-- <div class="progress cause-progress"> --}}
{{-- <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> --}}
{{-- 400$ / 700$ --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4> --}}
{{-- <div class="cause-details"> --}}
{{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna. --}}
{{-- </div> --}}

{{-- <div class="btn-holder text-center"> --}}

{{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a> --}}

{{-- </div> --}}



{{-- </div> <!-- /.cause --> --}}

{{-- </div> --}}


{{-- <div class="col-md-3 col-sm-6"> --}}

{{-- <div class="cause"> --}}

{{-- <img src="{{asset('assets')}}/images/causes/cause-rights.jpg" alt="" class="cause-img"> --}}

{{-- <div class="progress cause-progress"> --}}
{{-- <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> --}}
{{-- 400$ / 1000$ --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4> --}}
{{-- <div class="cause-details"> --}}
{{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna. --}}
{{-- </div> --}}

{{-- <div class="btn-holder text-center"> --}}

{{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a> --}}

{{-- </div> --}}



{{-- </div> <!-- /.cause --> --}}

{{-- </div> --}}

{{-- <div class="col-md-3 col-sm-6"> --}}

{{-- <div class="cause"> --}}

{{-- <img src="{{asset('assets')}}/images/causes/cause-culture.jpg" alt="" class="cause-img"> --}}

{{-- <div class="progress cause-progress"> --}}
{{-- <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> --}}
{{-- 400$ / 700$ --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- <h4 class="cause-title"><a href="#">ARTS AND CULTURE </a></h4> --}}
{{-- <div class="cause-details"> --}}
{{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna. --}}
{{-- </div> --}}

{{-- <div class="btn-holder text-center"> --}}

{{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a> --}}

{{-- </div> --}}



{{-- </div> <!-- /.cause --> --}}

{{-- </div> --}}

{{-- </div> --}}

{{-- </div> --}}

{{-- </div> <!-- /.our-causes --> --}}






{{-- <div class="section-home our-sponsors animate-onscroll fadeIn"> --}}

{{-- <div class="container"> --}}

{{-- <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2> --}}

{{-- <ul class="owl-carousel list-unstyled list-sponsors"> --}}

{{-- <li> <img src="{{asset('assets')}}/images/sponsors/bazarfix-logo" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/wikimedia.png" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/one-world.png" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/wikiversity.png" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/united-nations.png" alt=""></li> --}}

{{-- <li> <img src="{{asset('assets')}}/images/sponsors/bus.png" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/wikimedia.png" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/one-world.png" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/wikiversity.png" alt=""></li> --}}
{{-- <li> <img src="{{asset('assets')}}/images/sponsors/united-nations.png" alt=""></li> --}}

{{-- </ul> --}}

{{-- </div> --}}

{{-- </div> <!-- /.our-sponsors --> --}}





@include('frontend.partial.footer')
