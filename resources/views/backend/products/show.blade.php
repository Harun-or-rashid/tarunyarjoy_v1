@extends('backend.master')

@section('breadcrumbs', Breadcrumbs::render('home.products.create'))

@section('main_content')
    <div class="container">
        <div class="row" style="display:flex; justify-content: center;">
            <div class="col-md-8">
                <a href="{{ route('home.products.index') }}" class="btn btn-primary">Back</a>
                <br> <br>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Product</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($product->image) }}" alt="" width="180" style="width: 180px;">
                            </div>
                            <div class="col-md-8">
                                <label for="title">Title:&nbsp;</label>
                                <span>{{ $product->title }}</span> <br>
                                <label for="description">Description:&nbsp;</label>
                                <span>{{ $product->description }}</span> <br>
                                <label for="price">Price:&nbsp;</label>
                                <span>{{ $product->price }}</span> <br>
                                <label for="quantity">Product Quantity:&nbsp;</label>
                                <span>{{ $product->quantity }}</span>
                                <br>
                                <label for="request">Product Request:&nbsp;</label>
                                <span>{{ $product->request->count() }}</span>
                                <br>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection
