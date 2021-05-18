@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.requests.show', $request->id))

@section('main_content')
    <div class="container">
        <div class="row" style="display:flex; justify-content: center;">
            <div class="col-md-8">
                <a href="{{ route('home.requests.index') }}" class="btn btn-primary">Back</a>
                <br> <br>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Request</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset($request->product->image) }}" alt="" width="180"
                                        style="width: 180px;">
                                </div>
                                <div class="col-md-6">
                                    <label for="title">Product Title:&nbsp;</label>
                                    <span>{{ $request->product->title }}</span> <br>
                                    <label for="description">Description:&nbsp;</label>
                                    <span>{{ $request->product->description }}</span> <br>
                                    <label for="price">Price:&nbsp;</label>
                                    <span>{{ $request->product->price }}</span> <br>
                                    <label for="quantity">Product Quantity:&nbsp;</label>
                                    <span>{{ $request->product->quantity }}</span>
                                    <br>
                                    <label for="request">Product Request:&nbsp;</label>
                                    <span>{{ $request->product->request->count() }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name:&nbsp;</label>
                                    <span>{{ $request->volunteer->name }}</span> <br>
                                    <label for="email">Email:&nbsp;</label>
                                    <span>{{ $request->volunteer->email }}</span> <br>

                                    <label for="phone">Phone:&nbsp;</label>
                                    <span>{{ $request->volunteer->phone }}</span> <br>

                                    <label for="quantity">Request Quantity:&nbsp;</label>
                                    <span>{{ $request->quantity }}</span>
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset($request->volunteer->image) }}" alt="" width="180"
                                        style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-12" style="display: flex;">
                                @if ($request->status == 'request')
                                    @role('Admin')
                                    <form action="{{ route('home.requests.accept', $request->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-info" style="margin-right: 10px;">
                                            Accept
                                        </button>
                                    </form>

                                    <form action="{{ route('home.requests.reject', $request->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger">
                                            Reject
                                        </button>
                                    </form>
                                    @endrole
                                @endif
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection
