@extends('layouts.ego-app')
@section('content')
@include('ego.include.banner')
<style>
    /* Background overlay */
    .search-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
    }

    /* Popup content */
    .search-popup-content {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 500px;
        position: relative;
    }

    /* Close button */
    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
    }

    /* Input container */
    /* Search input field */
    #search-input {
        flex: 1;
        border: none;
        padding: 10px;
        font-size: 16px;
        outline: none;
        border-radius: 4px 0 0 4px;
        background: #f9f9f9;
    }

    /* Search icon */
    .search-icon {
        width: 20px;
        height: 20px;
        margin-left: 10px;
        cursor: pointer;
    }

    /* Hover and focus effects */
    #search-input:focus {
        border-bottom: 2px solid black;
    }

    .search-icon:hover {
        opacity: 0.7;
    }

    /* Hide the popup by default */
    .search-popup {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Black background with opacity */
        justify-content: flex-end;
        align-items: flex-start;
        z-index: 1000;
        padding: 20px;
    }

    /* Style the popup content */
    .search-popup-content {
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        width: 300px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Style the input field */
    #search-input {
        width: 80%;
        padding: 5px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Style the close button */
    #close-popup {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }
</style>


<div class="container my-5">
    <div class="row">
        <div class="col">
            <h3 class="text-center">@lang('messages.welcome')</h3>
           
            <p>
                Ego Vision is an Italian brand, leader in contactology since 2011,
                offering monthly and quarterly lenses in two different materials
                (Polymacon and Hioxifilcon D) for Myopia, Hyperopia and Astigmatism.
                Manufactured by Italian company Qualimed srl, Ego Vision lenses are
                available in wide range of tones and colors: <b>33 different shades</b> and
                diopters (power) from <b>-13.00 to +6.00</b> and also <b>toric lenses</b>. We
                offer Premium shipping with average time of delivery 24/48 hours
                (depending on countries). Ego Vision colored contact lenses are CE and
                FDA approved. Our lenses are distributed in optical stores in over
                40 countries.
            </p>

        </div>
    </div>
    <div class="mt-5 container">
        <div class="m-1">
            <div class="row ">
                <div class="col mb-4">
                    <a href="" class="card-link">
                        <div class="card border-0 text-center">
                            <div class=" overflow-hidden">
                                <a href="blueLance.html"> <img
                                        src="https://www.desiolens.com/media/wysiwyg/Innocent_white_desio_lenses_square.jpg"
                                        class="img-fluid" alt="Image 1" /></a>
                            </div>
                            <div class="card-body">
                                <h5>Blue Lenses</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="" class="card-link">
                        <div class="card border-0 text-center">
                            <div class=" overflow-hidden">
                                <a href="Lense.html"><img
                                        src="https://www.desiolens.com/media/wysiwyg/Sublime_grey_desio_lenses_square.jpeg"
                                        class="img-fluid" alt="Image 2" /></a>
                            </div>
                            <div class="card-body">
                                <h5>Green Lenses</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="" class="card-link">
                        <div class="card border-0 text-center">
                            <div class=" overflow-hidden">
                                <a href="brownLense.html"> <img
                                        src="https://www.desiolens.com/media/wysiwyg/Cappucino_desio_lenses_square.jpg"
                                        class="img-fluid" alt="Image 3" /></a>
                            </div>
                            <div class="card-body">
                                <h5>Brown Lenses</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="" class="card-link">
                        <div class="card border-0 text-center">
                            <div class=" overflow-hidden">
                                <a href="Lense.html"> <img
                                        src="https://www.desiolens.com/media/wysiwyg/Sublime_grey_desio_lenses_square.jpeg"
                                        class="img-fluid" alt="Image 4" /></a>
                            </div>
                            <div class="card-body">
                                <h5>Grey lenses</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome section END-->
    <!-- Attitude collection  -->
    <div class="container text-center my-5">

        <div class="row">
            <div class="col">
                <h3>Attitude Collection 2 tones</h3>
                <h3>New Colors</h3>
                <h5 class="mt-2">Discovers</h5>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="#" class="card-link d-block ">
                    <div class="card border-0 text-center ">
                        <div class="card-video-top overflow-hidden position-relative">
                            <video src="{{ asset('ego/video/motion.mp4') }}" class="card-video img-fluid" alt="Video 1"
                                autoplay loop muted playsinline>
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="card-body">
                            <h5>Deep Brown</h5>
                            <h6>Shop the Color</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="#" class="card-link d-block ">
                    <div class="card border-0 text-center ">
                        <div class="card-video-top overflow-hidden position-relative">
                            <video src="{{ asset('ego/video/motion') }}.mp4" class="card-video img-fluid" alt="Video 2"
                                autoplay loop muted playsinline>
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="card-body">
                            <h5>Bold Grey</h5>
                            <h6>Shop the Color</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------- -->
    <div class="container text-center ">
        <div class="row">
            <div class="col">
                <h3>Attitude Timeless Collection 2024</h3>
                <h3>3tones</h3>
                <h5 class="mt-3">Discovers</h5>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="#" class="card-link d-block ">
                    <div class="card border-0 text-center" style="height: 645px;">
                        <div class=" overflow-hidden position-relative">
                            <img src="{{ asset('ego/cart_image/imageact.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="card-body ">
                            <h5>Timeless Grey</h5>
                            <h6>Shop the Color</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="#" class="card-link d-block ">
                    <div class="card border-0 text-center" style="height: 645px;">
                        <div class="overflow-hidden position-relative">
                            <img src="{{ asset('ego/cart_image/imageact2.jpg') }}" alt=""
                                class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5>Eternal Brown</h5>
                            <h6>Shop the Color</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------- -->
    <div class="container mt-4">
        <div class="row">

            <div class="col-md-6 mb-4">
                <a href="#" class="card-link d-block ">
                    <div class="card border-0 text-center" style="height: 645px;">
                        <div class="overflow-hidden position-relative">
                            <img src="{{ asset('ego/cart_image/imageacti3.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5>Forever</h5>
                            <h6>Shop the Color</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="#" class="card-link d-block ">
                    <div class="card border-0 text-center" style="height: 645px;">
                        <div class=" overflow-hidden position-relative">
                            <img src="{{ asset('ego/cart_image/imagecart4.jpg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5>Infinity Blue</h5>
                            <h6>Shop the Color</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <div class="container">
        <h3>More Ego Vision Lenses</h3>
    </div>

    <div class="mt-5 container">
        <div class="row">
            <div class="col-12">
                <div class="product-slider d-flex flex-nowrap overflow-hidden ">
                    <div class="card-product-slider mx-2 mb-5">
                        <div class="card-product-slider-img-wrapper ">
                            <img src="https://www.desiolens.com/media/catalog/product/cache/92138ab3c0818b7dd2dcb9466c666313/i/r/irresistible_blue3_desio_colored_contact_lenses.jpg"
                                class="card-product-slider-img-top" alt="...">
                            <a href="#" class="stretched-link"></a>
                            <div class="card-product-slider-icons">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-share"></i>
                            </div>
                        </div>
                        <div class="card-product-slider-body">
                            <h5 class="card-product-slider-title">DELICIOUS HONEY</h5>
                            <small class="price">STARTING AT: 00.00 TK</small>

                        </div>
                    </div>
                    <div class="card-product-slider mx-2">
                        <div class="card-product-slider-img-wrapper">
                            <img src="https://www.desiolens.com/media/catalog/product/cache/92138ab3c0818b7dd2dcb9466c666313/i/r/irresistible_blue3_desio_colored_contact_lenses.jpg"
                                class="card-product-slider-img-top" alt="...">
                            <a href="#" class="stretched-link"></a>
                            <div class="card-product-slider-icons">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-share"></i>
                            </div>
                        </div>
                        <div class="card-product-slider-body">
                            <h5 class="card-product-slider-title">DELICIOUS HONEY</h5>
                            <small class="price">STARTING AT: 00.00 TK</small>

                        </div>
                    </div>
                    <div class="card-product-slider mx-2">
                        <div class="card-product-slider-img-wrapper">
                            <img src="https://www.desiolens.com/media/catalog/product/cache/92138ab3c0818b7dd2dcb9466c666313/i/r/irresistible_blue3_desio_colored_contact_lenses.jpg"
                                class="card-product-slider-img-top" alt="...">
                            <a href="#" class="stretched-link"></a>
                            <div class="card-product-slider-icons">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-share"></i>
                            </div>
                        </div>
                        <div class="card-product-slider-body">
                            <h5 class="card-product-slider-title">DELICIOUS HONEY</h5>
                            <small class="price">STARTING AT: 00.00 TK</small>

                        </div>
                    </div>
                    <div class="card-product-slider mx-2">
                        <div class="card-product-slider-img-wrapper">
                            <img src="https://www.desiolens.com/media/catalog/product/cache/92138ab3c0818b7dd2dcb9466c666313/i/r/irresistible_blue3_desio_colored_contact_lenses.jpg"
                                class="card-product-slider-img-top" alt="...">
                            <a href="#" class="stretched-link"></a>
                            <div class="card-product-slider-icons">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-share"></i>
                            </div>
                        </div>
                        <div class="card-product-slider-body">
                            <h5 class="card-product-slider-title">DELICIOUS HONEY</h5>
                            <small class="price">STARTING AT: 00.00 TK</small>

                        </div>
                    </div>
                    <div class="card-product-slider mx-2">
                        <div class="card-product-slider-img-wrapper">
                            <img src="https://www.desiolens.com/media/catalog/product/cache/92138ab3c0818b7dd2dcb9466c666313/i/r/irresistible_blue3_desio_colored_contact_lenses.jpg"
                                class="card-product-slider-img-top" alt="...">
                            <a href="#" class="stretched-link"></a>
                            <div class="card-product-slider-icons">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-share"></i>
                            </div>
                        </div>
                        <div class="card-product-slider-body">
                            <h5 class="card-product-slider-title">DELICIOUS HONEY</h5>
                            <small class="price">STARTING AT: 00.00 TK</small>

                        </div>
                    </div>
                    <div class="card-product-slider mx-2">
                        <div class="card-product-slider-img-wrapper">
                            <img src="https://www.desiolens.com/media/catalog/product/cache/92138ab3c0818b7dd2dcb9466c666313/i/r/irresistible_blue3_desio_colored_contact_lenses.jpg"
                                class="card-product-slider-img-top" alt="...">
                            <a href="#" class="stretched-link"></a>
                            <div class="card-product-slider-icons">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-share"></i>
                            </div>
                        </div>
                        <div class="card-product-slider-body">
                            <h5 class="card-product-slider-title">DELICIOUS HONEY</h5>
                            <small class="price">STARTING AT: 00.00 TK</small>

                        </div>
                    </div>
                    <!-- Repeat for additional cards -->
                </div>
            </div>
        </div>
    </div>






    <div class="container mt-5">
        <p>FOLLOW US ON</p>
        <h3>Instagram</h3>
        <p>GO FOLLOW @Ego Vision</p>
        <div>
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <video style="width: 100%" autoplay loop muted playsinline>
                                <source src="{{ asset('ego/video/demovideo.mp4') }}" type="video/mp4" />
                            </video>
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <img src="{{ asset('ego/img3.jpeg') }}" />
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <img src="{{ asset('ego/img1.jpeg') }}" />
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <video style="width: 100%" autoplay loop muted playsinline>
                                <source src="{{ asset('ego/video/motion.mp4') }}" type="video/mp4" />
                            </video>
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                                <!-- <a class="link-a" href="#">View And Shop</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <video style="width: 100%" autoplay loop muted playsinline>
                                <source src="{{ asset('ego/video/demovideo.mp4') }}" type="video/mp4" />
                            </video>
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                                <!-- <a class="link-a" href="#">View And Shop</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <img src="https://m.photoslurp.com/i/fit?width=576&height=720&url=https%3A%2F%2Fpslurpmedia.s3.amazonaws.com%2Finstagram-business%2F17929953719331586_0.jpg"
                                alt="" />
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                                <!-- <a class="link-a" href="#">View And Shop</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <img src="https://m.photoslurp.com/i/fit?width=576&height=720&url=https%3A%2F%2Fpslurpmedia.s3.amazonaws.com%2Finstagram-business%2F17929953719331586_0.jpg"
                                alt="" />
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                                <!-- <a class="link-a" href="#">View And Shop</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <img
                                src="https://m.photoslurp.com/i/fit?width=720&height=720&url=https%3A%2F%2Fpslurpmedia.s3.amazonaws.com%2Finstagram-business%2F17977397470323891_0.jpg" />
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram "></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                                <!-- <a class="link-a" href="#">View And Shop</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <img
                                src="https://m.photoslurp.com/i/fit?width=576&height=720&url=https%3A%2F%2Fpslurpmedia.s3.amazonaws.com%2Finstagram-business%2F17901155806886312_0.jpg" />
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                                <!-- <a class="link-a" href="#">View And Shop</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mb-2 col-12" style="cursor: pointer">
                    <div class="wrapper">
                        <div class="cardd">
                            <img
                                src="https://m.photoslurp.com/i/fit?width=360&height=359&url=https%3A%2F%2Fpslurpmedia.s3.amazonaws.com%2Finstagram-business%2F18003480121418500_1.jpg" />
                            <div class="overlay">
                                <div class="text-center">
                                    <h5 class="title">Salon 31</h5>
                                    <p class="text-p">
                                        <span class="icon-wrapper">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="details">
                                            <i class="fa-regular fa-heart"></i><span class="text-white">120</span>
                                            <i class="fa-solid fa-comments"></i><span class="text-white">30</span>
                                        </span>
                                    </p>
                                </div>
                                <!-- <a class="link-a" href="#">View And Shop</a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <button href="#" class="add-to-cart-button w-25 mt-4 text-nowrap">LOAD MORE
                </button>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="multiple-items container ">
            <!-- Navigation Buttons -->


            <!-- Slider Content -->
            <div class="row slider " style="cursor: pointer;">
                <div class="col-12">
                    <div class="card-body card-body-slider">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 ">
                                <i class="fas fa-check-circle mx-2" style="color:#6c6c85;"></i>Verified
                            </span>
                        </div>
                        <p class="mb-1 text-lg font-bold" style="line-height: 1.2; "><b style="font-size:14px">Great
                                quality...</b></p>
                        <p class="mb-4 text-gray-700" style="line-height: 1.2; font-size:14px">Quality! Lorem Lorem</p>
                        <small style="margin-top:-30px;position: absolute;font-size:12px">Angela, 5 hours ago</small>
                    </div>
                </div>
            </div>
            <div class="row slider" style="cursor: pointer;">
                <div class="col-12">
                    <div class="card-body card-body-slider">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 ">
                                <i class="fas fa-check-circle mx-2" style="color: #6c6c85;;"></i>Verified
                            </span>
                        </div>
                        <p class="mb-1 text-lg font-bold" style="line-height: 1.2; "><b style="font-size:14px">Great
                                quality...</b></p>
                        <p class="mb-4 text-gray-700" style="line-height: 1.2; font-size:14px">Quality! Lorem Lorem</p>
                        <small style="margin-top:-30px;position: absolute;font-size:12px">Angela, 5 hours ago</small>
                    </div>
                </div>
            </div>
            <div class="row slider" style="cursor: pointer;">
                <div class="col-12">
                    <div class="card-body card-body-slider">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 ">
                                <i class="fas fa-check-circle mx-2" style="color: #6c6c85;;"></i>Verified
                            </span>
                        </div>
                        <p class="mb-1 text-lg font-bold" style="line-height: 1.2; "><b style="font-size:14px">Great
                                quality...</b></p>
                        <p class="mb-4 text-gray-700" style="line-height: 1.2; font-size:14px">Quality! Lorem Lorem</p>
                        <small style="margin-top:-30px;position: absolute;font-size:12px">Angela, 5 hours ago</small>
                    </div>
                </div>
            </div>
            <div class="row slider" style="cursor: pointer;">
                <div class="col-12">
                    <div class="card-body card-body-slider">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 ">
                                <i class="fas fa-check-circle mx-2" style="color: #6c6c85;;"></i>Verified
                            </span>
                        </div>
                        <p class="mb-1 text-lg font-bold" style="line-height: 1.2; "><b style="font-size:14px">Great
                                quality...</b></p>
                        <p class="mb-4 text-gray-700" style="line-height: 1.2; font-size:14px">Quality! Lorem Lorem</p>
                        <small style="margin-top:-30px;position: absolute;font-size:12px">Angela, 5 hours ago</small>
                    </div>
                </div>
            </div>
            <div class="row slider" style="cursor: pointer;">
                <div class="col-12">
                    <div class="card-body card-body-slider">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 ">
                                <i class="fas fa-check-circle mx-2" style="color: #6c6c85;;"></i>Verified
                            </span>
                        </div>
                        <p class="mb-1 text-lg font-bold" style="line-height: 1.2; "><b style="font-size:14px">Great
                                quality...</b></p>
                        <p class="mb-4 text-gray-700" style="line-height: 1.2; font-size:14px">Quality! Lorem Lorem</p>
                        <small style="margin-top:-30px;position: absolute;font-size:12px">Angela, 5 hours ago</small>
                    </div>
                </div>
            </div>
            <div class="row slider" style="cursor: pointer;">
                <div class="col-12">
                    <div class="card-body card-body-slider">
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="icon-wrapper">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 ">
                                <i class="fas fa-check-circle mx-2" style="color: #6c6c85;"></i>Verified
                            </span>
                        </div>
                        <p class="mb-1 text-lg font-bold" style="line-height: 1.2; "><b style="font-size:14px">Great
                                quality...</b></p>
                        <p class="mb-4 text-gray-700" style="line-height: 1.2; font-size:14px">Quality! Lorem Lorem</p>
                        <small style="margin-top:-30px;position: absolute;font-size:12px">Angela, 5 hours ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <small>Rated <b>4.3</b>/5 based on 908 reviews.Showing our 5 star reviews</small> <br>
        <small> <i class="fas fa-star " style="color: #00b67a;font-size: 16px;"></i><strong> Trustpilot</strong></small>
    </div>
    @endsection