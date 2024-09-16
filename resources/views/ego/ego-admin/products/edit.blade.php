@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">{{ $pageTitle }}</h6>
                <h6 class="m-0"><a href="{{ route('product.index') }}" class="text-decoration-none btn btn-primary">Product
                        List</a>
                </h6>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection
