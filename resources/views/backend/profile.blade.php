@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.profile'))

@section('main_content')
    <div class="container">
        <div class="row" style="display:flex; justify-content: center;">
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Profile</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('home.profile-update', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <img src="{{ asset($user->image ?? randUserAvatar()) }}" alt="{{ $user->name }}"
                                    style="width: 220px;">
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="John Doe"
                                    value="{{ $user->name }}" required />
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nid">NID No:</label>
                                <input type="text" id="nid" name="nid" class="form-control" placeholder="xxxx-xxxx-xxxx"
                                    value="{{ $user->nid }}" required />
                                @error('nid')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone No:</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="+880xxxxxxxx"
                                    value="{{ $user->phone }}" required />
                                @error('phone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ $user->email }}" placeholder="john.doe@mail.com" required />
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Profile Picture</label>
                                <input type="file" id="image" class="form-control" name="image" accept="image/*">
                                @error('image')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="display:flex; justify-content: center;">
            <div class="col-md-8">

                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Change Password</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('home.change-password', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" id="new_password" name="password" class="form-control"
                                    placeholder="*********" required />
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" placeholder="********" required />
                                @error('password_confirmation')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection
