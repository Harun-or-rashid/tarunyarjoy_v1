@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.requests'))

@section('main_content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <br>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Request Data Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Title</th>
                                    <th>Volunteer</th>
                                    <th>Name</th>
                                    <th>price</th>
                                    <th>Product Quantity</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Models\Request::with(['product', 'volunteer'])->get() as $request)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($request->product->image) }}"
                                                alt="{{ $request->product->title }}" style="width: 50px;">
                                        </td>
                                        <td>{{ $request->product->title }}</td>

                                        <td>
                                            <img src="{{ asset($request->volunteer->image) }}"
                                                alt="{{ $request->volunteer->name }}" style="width: 50px;">
                                        </td>
                                        <td>{{ $request->volunteer->name }}</td>
                                        <td>{{ $request->product->price }}</td>
                                        <td>{{ $request->product->quantity }}</td>
                                        <td>{{ $request->quantity }}</td>
                                        <td>{{ strtoupper($request->status) }}</td>
                                        <td style="display: flex; justify-content:space-around; align-items: center;">
                                            <a class="btn btn-success"
                                                href="{{ route('home.requests.show', $request->id) }}">
                                                Show
                                            </a>
                                            @if ($request->status == 'request')
                                                @role('Admin')
                                                <form action="{{ route('home.requests.accept', $request->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-info">
                                                        Accept
                                                    </button>
                                                </form>

                                                <form action="{{ route('home.requests.reject', $request->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-danger">
                                                        Reject
                                                    </button>
                                                </form>
                                                @endrole
                                            @endif
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
