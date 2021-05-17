@extends('backend.master')
@section('title', 'Create an Event')
@section('main_content')
    <div class="container ">
        <div class="panel panel-info">
            <div class="panel-body info">
                <form class="form-box" action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                    <h3 class="form-box success">Create an Event</h3><br>
                    @csrf
                    <div class="form-group ">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="give a name"
                            name="title">
                        {{ $errors->first('title') }}
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descriptions</label>
                        <textarea type="text" class="form-control" id="exampleFormControlInput1" name="description"
                            placeholder="Please explain"></textarea>
                        {{ $errors->first('description') }}
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Schedule</label>
                        <input type="datetime-local" class="form-control" id="exampleFormControlInput1" name="time">
                        {{ $errors->first('time') }}
                    </div>

                    <div class="form-group ">
                        <label for="exampleFormControlInput1">Place</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="where..?"
                            name="place">
                        {{ $errors->first('place') }}
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Upload an Image</label>
                        <input type="file" class="btn-file" id="exampleFormControlInput1" name="image">
                        {{ $errors->first('image') }}
                    </div>
                    <br>


                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>


                </form>

            </div>
        </div>
    </div>
@endsection
