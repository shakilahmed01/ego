@extends('admin.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('ego-assets/css/jodit.fat.min.css') }}">
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">{{ $pageTitle }}</h6>
            <h6 class="m-0"><a href="{{ route('product.index') }}" class="text-decoration-none btn btn-primary">Product
                    List</a>
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-3">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Pack Content</label>
                        <input type="text" class="form-control" name="pack_content">
                        @error('pack_content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Diameter</label>
                        <select name="diameter_id" class="form-control">
                            <option value="" selected>Select Diameter</option>
                            @foreach ($diameters as $diameter)
                            <option value="{{ $diameter->id }}">{{ $diameter->name }}</option>
                            @endforeach
                        </select>
                        @error('diameter_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Base Curve</label>
                        <select name="base_curve_id" class="form-control">
                            <option value="" selected>Select Base Curve</option>
                            @foreach ($bases as $base)
                            <option value="{{ $base->id }}">{{ $base->name }}</option>
                            @endforeach
                        </select>
                        @error('base_curve_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Material</label>
                        <select name="material_id" class="form-control">
                            <option value="" selected>Select Material</option>
                            @foreach ($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                            @endforeach
                        </select>
                        @error('material_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Water Content</label>
                        <select name="water_content_id" class="form-control">
                            <option value="" selected>Select Water Content</option>
                            <option value="36%" selected>36%</option>
                            <option value="37%" selected>37%</option>
                            <option value="38%" selected>38%</option>

                        </select>
                        @error('water_content_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Replacement</label>
                        <select name="replacement_id" class="form-control">
                            <option value="" selected>Select Replacement</option>
                            @foreach ($replacements as $replacement)
                            <option value="{{ $replacement->id }}">{{ $replacement->name }}</option>
                            @endforeach
                        </select>
                        @error('replacement_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Tones</label>
                        <select name="tone_id" class="form-control">
                            <option value="" selected>Select Tones</option>
                            @foreach ($tones as $tone)
                            <option value="{{ $tone->id }}">{{ $tone->name }}</option>
                            @endforeach
                        </select>
                        @error('tone_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Lens Design</label>
                        <select name="lens_design_id" class="form-control">
                            <option value="" selected>Select Lens Design</option>
                            @foreach ($lDesigns as $lDesign)
                            <option value="{{ $lDesign->id }}">{{ $lDesign->name }}</option>
                            @endforeach
                        </select>
                        @error('lens_design_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Price</label>
                        <input type="number" class="form-control" name="price">
                        @error('price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Type</label>
                        <select name="type" class="form-control">
                            <option value="" selected>Select Type</option>
                            <option value="1">Lens</option>
                            <option value="0">Accessories</option>
                        </select>
                        @error('type')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Stock Quantity</label>
                        <input type="number" class="form-control" name="stock_quantity">
                        @error('stock_quantity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Choose Color</label>
                        <select name="color_id" class="form-control">
                            <option value="" selected>Pick Color</option>
                            @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                            @endforeach
                        </select>
                        @error('color_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Product Category</label>
                        <select name="category_id" class="form-control">
                            <option value="" selected>Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Product Introduction</label>
                        <textarea name="product_intro" class="form-control" id="editor1"></textarea>
                        @error('product_intro')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Product Description</label>
                        <textarea name="description" class="form-control" id="editor2"></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Product Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                name="product_image">
                            <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                            @error('product_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="imagePreview" style="margin-top: 10px;"></div>
                    </div>
                    <div class="form-group col-6">
                        <label for="">Product Image Album</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02"
                                name="product_image_album[]" accept="image/*" multiple>
                            <label class="custom-file-label fileLabel" for="inputGroupFile02">Choose Image</label>
                            @error('product_image_album')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @error('product_image_album.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="imagePreview2" style="margin-top: 10px;"></div>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('ego-assets/js/jodit.fat.min.js') }}"></script>
<script>
    $(document).ready(function() {
        const editor1 = new Jodit('#editor1', {
            toolbarAdaptive: false,
            toolbarSticky: true,
            height: 300,
        });

        const editor2 = new Jodit('#editor2', {
            toolbarAdaptive: false,
            toolbarSticky: true,
            height: 300,
        });

        $('#inputGroupFile01').on('change', function() {
            var file = this.files[0];
            if (file) {
                $(this).next('.custom-file-label').html(file.name);
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').html('<img src="' + e.target.result +
                        '" alt="Selected Image" style="width: 200px; height: auto;">');
                }
                reader.readAsDataURL(file);
            } else {
                $(this).next('.custom-file-label').html('Choose file');
                $('#imagePreview').html('');
            }
        });

        $('#inputGroupFile02').on('change', function() {
            var files = this.files;
            var $imagePreview = $('#imagePreview2');
            $imagePreview.html(''); // Clear previous images

            if (files.length > 0) {
                $(this).next('.fileLabel').html(files.length + ' images selected');
                Array.from(files).forEach(function(file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $imagePreview.append('<img src="' + e.target.result +
                            '" alt="Selected Image" style="width: 200px; height: auto; margin-right: 10px; margin-bottom: 10px;">'
                        );
                    }
                    reader.readAsDataURL(file);
                });
            } else {
                $(this).next('.fileLabel').html('Choose Images');
            }
        });
    });
</script>
@endpush