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
                        <h3 class="box-title">Blood Request Done By Me</h3>
                        <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#staticBackdrop">
                            Request Blood
                        </button>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\BloodRequest::where('request_by', Auth::id())->with('relAcceptedBy')->get() as $blood)
                                <tr>
                                    <td>{{ $blood->location }}</td>
                                    <td>{{ $blood->blood_group }}</td>
                                    <td>{{ Carbon\Carbon::make($blood->needed_date)->diffForHumans() }}</td>
                                    <td>{{ $blood->description }}</td>
                                    <td>{{ $blood->phone }}</td>
                                    <td
                                    >
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Request Blood </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('home.blood.request') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Details</label>
                                <textarea name="description" class="form-control" rows="3" id="inputEmail4"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Location</label>
                                <input name="location" type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Blood Group</label>
                                <select name="blood_group" id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $group)
                                        <option value="{{ $group }}">{{ $group }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Needed Date</label>
                                <input name="needed_date" type="date" class="form-control" id="inputZip">
                            </div>
                             <div class="form-group col-md-6">
                                <label for="inputZip">Phone No</label>
                                <input name="phone" type="tel" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Request Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
