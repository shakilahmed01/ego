@extends('layouts.ego-app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <a href="index.html">Home</a>
    <h1 class="text-center" style="font-size: 5rem">Color</h1>
    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia explicabo quae, accusantium eius magnam molestias laboriosam perspiciatis repellendus officia deleniti, aliquid eaque officiis alias doloremque sint earum hic et possimus deserunt laborum. Numquam repellat doloremque, a voluptas, consequuntur qui porro debitis sapiente eum deleniti velit asperiores culpa fuga facere possimus!</p>
    @foreach ($colors as $color)
    <div class="row align-items-center" style="background: #f5f5f5;">
        <div class="col-md-8">
            <img src="{{ asset($color->image_path) }}" class="img-fluid" alt="Timeless Collection">
        </div>
        <div class="col-md-4">
            <div class="p-5 mt-2">
                <h1>{{ $color->name }}</h1>
                {!! $color->color_intro !!}
                <small>Diameter: 14.2mm - Base curve 8.6mm</small>
                <small>Availability: From -8.00 to +4.00</small> <br>
                <a href="#" class="mt-5 text-black">Discover the Collection <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div><br>
    @endforeach
</div>
@endsection