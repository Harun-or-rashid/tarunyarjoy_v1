@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.products'))

@section('main_content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @role('Admin')
                <a href="{{ route('home.products.create') }}" class="btn btn-info">
                    Add Product&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
                <br> <br>
                @endrole
                <br>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Product Data Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Request</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Models\Product::with('request')->get() as $product)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}"
                                                style="width: 50px;">
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->price }} BDT</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->request->count() }}</td>
                                        <td style="display: flex; justify-content:space-around; align-items: center;">
                                            <a class="btn btn-success"
                                                href="{{ route('home.products.show', $product->id) }}">
                                                show
                                            </a>
                                            @hasanyrole('Admin|Volunteer')
                                            <a class="btn btn-info"
                                                href="{{ route('home.requests.create', $product->id) }}">
                                                Request
                                            </a>
                                            @endhasanyrole
                                            @role('Admin')
                                            <a class="btn btn-primary"
                                                href="{{ route('home.products.edit', $product->id) }}">
                                                Edit
                                            </a>
                                            <form action="{{ route('home.products.delete', $product->id) }}"
                                                method="POST">
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
