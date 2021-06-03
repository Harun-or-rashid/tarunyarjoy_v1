@extends('backend.master')
@section('breadcrumbs', Breadcrumbs::render('dashboard'))
@section('main_content')
    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            {{ $newRequestCount }}
                        </h3>
                        <p>
                            Requests
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="javascript::void(0)" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            {{ $donation }}
                        </h3>
                        <p>
                            Donation
                        </p>
                    </div>
                    <div class="icon">
                        {{-- <i class="ion ion-stats-bars"></i> --}}
                        <i class="fa fa-dollar"></i>
                    </div>
                    <a href="javascript::void(0)" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            {{ $donorCount }}
                        </h3>
                        <p>
                            Donor
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="javascript::void(0)" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>
                            {{ $volunteerCount }}
                        </h3>
                        <p>
                            Volunteer
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="javascript::void(0)" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->

        <!-- Main row -->


    </section><!-- /.content -->
    <!-- add new calendar event modal -->
@endsection
