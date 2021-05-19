@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.members'))

@section('main_content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Volunteer Request Data Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Volunteer</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($member->image ?? randUserAvatar()) }}"
                                                alt="{{ $member->name }}" style="width: 50px; border-radius: 50%;">
                                            &nbsp;{{ $member->name }}
                                        </td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->phone }}</td>
                                        <td>{{ $member->roleNameC() }}</td>
                                        <td style="display: flex; justify-content:space-around; align-items: center;">
                                            <a class="btn btn-success"
                                                href="{{ route('home.members.show', $member->id) }}">
                                                show
                                            </a>
                                            @role('Admin')
                                            <form action="{{ route('home.members.accept', $member->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-info">Accept </button>
                                            </form>
                                            <form action="{{ route('home.members.reject', $member->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger">Reject </button>
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
