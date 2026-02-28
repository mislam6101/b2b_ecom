@extends('backend.app')

@section('head')

<head>
    <meta charset="utf-8" />
    <title>Edit Product | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('')}}/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{url('')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{url('')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>
@endsection

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Edit Product</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Product</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Product Name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="prod_name" value="{{ old('prod_name', $product->name) }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control" value="{{ $product->seller->company }}" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Price <span style="color: red;">*</span></label>
                                            <input type="number" class="form-control" name="prod_price" value="{{ old('prod_price', $product->price) }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Quantity <span style="color: red;">*</span></label>
                                            <input type="number" class="form-control" name="prod_quantity" value="{{ old('prod_quantity', $product->quantity) }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Minimum Order Quantity <span style="color: red;">*</span></label>
                                            <input type="number" class="form-control" name="prod_moq" value="{{ old('prod_moq', $product->moq) }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">SKU <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="prod_sku" value="{{ old('prod_sku', $product->sku) }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Discount Price</label>
                                            <input type="number" class="form-control" name="prod_dis_price" value="{{ old('prod_dis_price', $product->discount_price) }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Details</label>
                                            <textarea class="form-control" name="prod_details">{{ old('prod_details', $product->description) }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" name="image" class="form-control" accept="image/*">
                                            @if($product->image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/products/'.$product->image) }}" style="height: 60px;">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary">Update Product</button>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>document.write(new Date().getFullYear())</script> © Velonic - by <b>Md. Mahmudul Islam</b>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{url('')}}/assets/js/vendor.min.js"></script>
<script src="{{url('')}}/assets/js/app.min.js"></script>
@endsection