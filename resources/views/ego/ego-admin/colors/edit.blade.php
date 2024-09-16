@extends('admin.layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('ego-assets/css/jodit.fat.min.css') }}">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">{{ $pageTitle }}</h6>
                <h6 class="m-0"><a href="{{ route('color.index') }}" class="text-decoration-none btn btn-primary">Color
                        List</a>
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('color.update', $color->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Color Name</label>
                            <input type="text" class="form-control" name="name"
                                placeholder="please enter color name...." value="{{ $color->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    name="image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div id="imagePreview" style="margin-top: 10px;"></div>
                            <div id="existingImage">
                                <img src="{{ asset($color->image_path) }}" style="width: 200px; height: auto;">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Color Introduction</label>
                            <textarea name="color_intro" placeholder="Enter color introduction text" id="editor">{{ $color->color_intro }}</textarea>
                            @error('color_intro')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script src="{{ asset('ego-assets/js/jodit.fat.min.js') }}"></script>
<script>
    $(document).ready(function(){
        const editor = new Jodit('#editor', {
            toolbarAdaptive: false,
            toolbarSticky: true,
            height: 300,
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#inputGroupFile01').on('change', function() {
            $('#existingImage').addClass('d-none');
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
    });
</script>
@endpush
