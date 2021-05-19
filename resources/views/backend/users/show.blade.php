@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.users.create'))

@section('main_content')
    <div class="container">
        <div class="row" style="display:flex; justify-content: center;">
            <div class="col-md-8">
                <a href="{{ route('home.users.index') }}" class="btn btn-primary">Back</a>
                <br> <br>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">User</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($user->image ?? randUserAvatar()) }}" alt="" width="180"
                                    style="width: 180px;">
                            </div>
                            <div class="col-md-8">
                                <label for="name">Name:&nbsp;</label>
                                <span>{{ $user->name }}</span> <br>
                                <label for="email">Email:&nbsp;</label>
                                <span>{{ $user->email }}</span> <br>
                                <label for="phone">Phone:&nbsp;</label>
                                <span>{{ $user->phone }}</span> <br>
                                <label for="nid">NID:&nbsp;</label>
                                <span>{{ $user->nid }}</span> <br>
                                <label for="role">Role:&nbsp;</label>
                                <span>{{ $user->roleNameC() }}</span> <br>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection
