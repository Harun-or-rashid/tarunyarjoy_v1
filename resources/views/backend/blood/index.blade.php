@extends('backend.master')

{{-- @section('breadcrumbs', Breadcrumbs::render('home.members.show', $member->id)) --}}

@section('main_content')
    <div class="container">
        <div class="col-12 mx-auto">
            {{-- <a href="{{ route('home.members.index') }}" class="btn btn-primary">Back</a> --}}
            <br> <br>
            <!-- general form elements -->
            <div class="box">
                <div class="box-header">
                    <div class="d-flex align-items-center">
                        <h3 class="box-title">Blood Requests</h3>
                    </div>


                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="datatable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>B-Group</th>
                                <th>Donate Time</th>
                                <th>Description</th>
                                <th>Phone</th>
                                <th>Request Status</th>
                                <th>Coming</th>
                                {{-- @if (is_null($blood->status)) --}}
                                    <th>Action</th>
                                {{-- @endif --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brequests as $blood)
                                <tr>
                                    <td>{{ $blood->location }}</td>
                                    <td>{{ $blood->blood_group }}</td>
                                    <td>{{ Carbon\Carbon::make($blood->needed_date)->diffForHumans() }}</td>
                                    <td>{{ $blood->description }}</td>
                                    <td>{{ $blood->phone }}</td>
                                    <td>
                                        @php
                                            if ($blood->status === 1) {
                                                echo 'published';
                                            } elseif ($blood->status === 0) {
                                                echo 'not accepted';
                                            } else {
                                                echo 'waiting';
                                            }
                                        @endphp
                                    </td>
                                    <td>
                                        @if ($blood->status === 1 && $blood->relAcceptedBy)
                                            <ul class="list-group">
                                                <li class="list-group-item active" aria-current="true">
                                                    {{ $blood->relAcceptedBy->name }} ({{ $blood->relAcceptedBy->phone }})</li>
                                                <li class="list-group-item">{{ $blood->relAcceptedBy->email }}</li>
                                            </ul>
                                        @else
                                            <p>Please Wait...</p>
                                        @endif
                                    </td>
                                    @if ( is_null($blood->status))
                                        <td class="d-flex justify-space-between">
                                            <form action="{{ route('home.blood.accept', $blood->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Accept </button>
                                            </form>
                                            <form action="{{ route('home.blood.reject', $blood->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Reject </button>
                                            </form>
                                        </td>
                                    @endif

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
