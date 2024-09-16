@extends('layouts.ego-app')
@push('style')
    <link rel="stylesheet" href="{{ asset('ego-assets/css/all_lenses.css') }}">
@endpush
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row mt-5">
        <div class="col-4" style="background: #f5f5f5">
            <div class="mt-5 p-4">
                <h1>All Lenses</h1>
                <small>23 PRODUCTS</small>
                <br />
                <a href="#" class="add-to-cart-button w-50 mt-4 text-nowrap">FILTER <i class="fas fa-plus mx-5"></i></a>
            </div>
        </div>

        <!-- ------------------------------------------------------------- -->
        <div class="col-8">
            <div class="row ">
                @foreach ($products as $product)
                    <div class="col-6">
                        <div class="card-product-slider mx-2">
                            <div class="card-product-slider-img-wrapper">
                                <img src="{{ asset($product->image_path) }}" class="card-product-slider-img-top">
                                <a href="{{ route('addToCart.index', $product->id) }}" class="stretched-link"></a>
                                <div class="card-product-slider-icons">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share"></i>
                                </div>
                            </div>
                            <div class="card-product-slider-body">
                                <h5 class="card-product-slider-title">{{ $product->name }}</h5>
                                <small class="price">STARTING AT : {{ $product->price }} {{ 'BDT' }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
