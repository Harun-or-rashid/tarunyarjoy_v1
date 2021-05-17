@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.users'))

@section('main_content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @role('Admin')
                <a href="{{ route('home.users.create') }}" class="btn btn-info">
                    Add User&nbsp;<i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <br> <br>
                @endrole
                <br>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">User Data Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Models\User::all() as $user)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($user->image ?? randUserAvatar()) }}"
                                                alt="{{ $user->name }}" style="width: 50px; border-radius: 50%;">
                                            &nbsp;{{ $user->name }}
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->role() }}</td>
                                        <td style="display: flex; justify-content:space-around; align-items: center;">
                                            <a class="btn btn-success" href="{{ route('home.users.show', $user->id) }}">
                                                show
                                            </a>
                                            @role('Admin')
                                            <a class="btn btn-primary" href="{{ route('home.users.edit', $user->id) }}">
                                                Edit
                                            </a>
                                            <form action="{{ route('home.users.delete', $user->id) }}" method="POST">
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
