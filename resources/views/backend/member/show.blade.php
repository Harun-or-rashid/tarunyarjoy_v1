@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.members.show', $member->id))

@section('main_content')
    <div class="container">
        <div class="row" style="display:flex; justify-content: center;">
            <div class="col-md-8">
                <a href="{{ route('home.members.index') }}" class="btn btn-primary">Back</a>
                <br> <br>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Member</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($member->image ?? randUserAvatar()) }}" alt="" width="180"
                                    style="width: 180px;">
                            </div>
                            <div class="col-md-8">
                                <label for="name">Name:&nbsp;</label>
                                <span>{{ $member->name }}</span> <br>
                                <label for="email">Email:&nbsp;</label>
                                <span>{{ $member->email }}</span> <br>
                                <label for="phone">Phone:&nbsp;</label>
                                <span>{{ $member->phone }}</span> <br>
                                <label for="nid">NID:&nbsp;</label>
                                <span>{{ $member->nid }}</span> <br>
                                <label for="role">Role:&nbsp;</label>
                                <span>{{ $member->roleNameC() }}</span> <br>
                                @if ($member->status == 1)
                                    Want to be volunteer
                                @endif
                                <div style="display: flex;">
                                    @role('Admin')
                                    <form action="{{ route('home.members.accept', $member->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-info">Accept </button>
                                    </form>
                                    <form action="{{ route('home.members.reject', $member->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Reject
                                        </button>
                                    </form>
                                    @endrole
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection
