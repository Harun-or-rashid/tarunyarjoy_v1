@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.events'))

@section('main_content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @role('Admin')
                <a href="{{ route('home.events.create') }}" class="btn btn-info">
                    Add Event
                </a>
                <br> <br>
                @endrole
                <br>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Event Data Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Place</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Models\Event::all() as $event)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($event->image) }}" alt="{{ $event->title }}"
                                                style="width: 50px;">
                                        </td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->place }}</td>
                                        <td>{{ date('h:i a', strtotime($event->time)) . ' ' . date('d/m/Y', strtotime($event->event_date)) }}
                                        </td>
                                        <td>{{ Carbon\Carbon::create($event->event_date)->diffForHumans() }}</td>
                                        <td style="display: flex; justify-content:space-around; align-items: center;">
                                            <a class="btn btn-success" href="{{ route('home.events.show', $event->id) }}">
                                                show
                                            </a>
                                            @role('Admin')
                                            <a class="btn btn-primary" href="{{ route('home.events.edit', $event->id) }}">
                                                Edit
                                            </a>
                                            <form action="{{ route('home.events.delete', $event->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete </button>
                                            </form>
                                            @endrole
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

    </section><!-- /.content -->
@endsection

@push('script')
    <script type="text/javascript">
        $(function() {
            $("#datatable").dataTable();
        });

    </script>
@endpush
