@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fadeup">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">My Products</h2>
            <p class="dashboard-subtitle">
                Manage it well and get money
            </p>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('dashboard-product-creates') }}" class="btn btn-success">Add New
                        Product</a>
                </div>
            </div>
            <div class="row mt-4">
                @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
                    <a href="{{ route('dashboard-product-details', $product->id) }}"
                        class="card card-dashboard-product d-block">
                        <div class="card-body">
                            <img src="{{ Storage::url($product->galleries->first()->photos ?? '') }}" alt="" class="w-100 mb-2" style="height: 150px">
                            <div class="product-title">{{ $product->name }}</div>
                            <div class="product-category">{{ $product->category->name }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
