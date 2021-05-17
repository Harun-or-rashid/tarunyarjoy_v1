@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.events.create'))

@section('main_content')
    <div class="container">
        <div class="row" style="display:flex; justify-content: center;">
            <div class="col-md-8">
                <a href="{{ route('home.events.index') }}" class="btn btn-primary">Back</a>
                <br> <br>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Event</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($event->image) }}" alt="" width="180" style="width: 180px;">
                            </div>
                            <div class="col-md-8">
                                <label for="title">Title:&nbsp;</label>
                                <span>{{ $event->title }}</span> <br>
                                <label for="description">Description:&nbsp;</label>
                                <span>{{ $event->description }}</span> <br>
                                <label for="place">Place:&nbsp;</label>
                                <span>{{ $event->place }}</span> <br>
                                <label for="">Event Schedule:&nbsp;</label>
                                <span>{{ date('h:i a', strtotime($event->time)) . ' ' . date('d/m/Y', strtotime($event->event_date)) }}</span>
                                <br>
                                <label for="status">Status:&nbsp;</label>
                                <span>{{ Carbon\Carbon::create($event->event_date)->diffForHumans() }}</span> <br>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection
