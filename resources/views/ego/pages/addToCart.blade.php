@extends('layouts.ego-app')
@push('style')
    <link rel="stylesheet" href="{{ asset('ego-assets/css/addToCart.css') }}">
@endpush
@section('content')
<style>
   
</style>
    <div class="row" style="margin-top:150px">
        <div class="col-md-2">
            <div class="vertical-slider" style="cursor: pointer">
                @foreach ($product->images as $image)
                    <div>
                        <img src="{{ asset($image->image_path) }}" class="img-fluid imageAlbum">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Middle Column - Vertical Images -->
        <div class="col-md-5">
            <div class="main-image-container">
                <img id="mainImage" src="{{ asset($product->image_path) }}"
                    class="main-image img-fluid" alt="Main Display" />
            </div>
        </div>
        <!-- Right Column - Add to Cart Section -->
        <div class="col-md-5 right-column p-5">
            <div class="add-to-cart-section">
                <h1>
                    <span>{{ $product->name }}</span>
                </h1>
                <div>
                    {!! $product->product_intro !!}
                </div>

                <div class="tab-container">
                    <div class="tab p-4" id="tab1" onclick="selectTab('tab1-radio')">
                        <div class="tab-content">
                            <input type="radio" id="tab1-radio" name="tab" checked
                                style="width: 20px; height: 20px; margin: 10px" />
                            <label for="tab1-radio">No Power</label>
                        </div>
                    </div>
                    <div class="tab p-4 mx-2" id="tab2" onclick="selectTab('tab2-radio')">
                        <div class="tab-content">
                            <input type="radio" id="tab2-radio" name="tab"
                                style="width: 20px; height: 20px; margin: 10px" />
                            <label for="tab2-radio">With Power</label>
                        </div>
                    </div>
                </div>
                <div id="pair-state" style="background-color: #f5f5f5">
                    <div class="p-3">
                        <fieldset class="pair-fieldset">
                            <legend class="float-none w-auto">Pair</legend>
                            <div class="product-count">
                                <button id="decrement" style="font-size: 10px;">
                                    <span style="font-size: 25px ">-</span>
                                </button>
                                <span id="quantity" style="font-size: 20px">1</span>
                                <button id="increment">
                                    <span style="font-size: 25px">+</span>
                                </button>
                            </div>
                        </fieldset>
                    </div>
                </div>

        <!-- -----------------------SELECT CART SECTION-------------------------------- -->
        <div class="with-power-state" id="with-power-state">
            <div class="container">
                <div class="d-flex align-items-center">
                    <button class="toggle-btn big-btn" data-target="#home" aria-controls="home">
                        <i class="fas fa-toggle-off"></i>
                    </button>
                    <p class="ml-3 mb-0">I need 2 different powers</p>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="open-content">
                        <!-- Open content for the home tab -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="eye-section">
                                <h6 class="text-center">First eye</h6>
                                <form>
                                    <select class="power-select">
                                        <option value="">Select power</option>
                                        <option value="+0.50">+0.50</option>
                                        <option value="+1.00">+1.00</option>
                                        <option value="+1.50">+1.50</option>
                                        <option value="+2.00">+2.00</option>
                                        <option value="+2.50">+2.50</option>
                                        <option value="+3.00">+3.00</option>
                                    </select>
                                </form>
                                <div class="power-section">
                                    <span class="power-value">0.50</span>
                                    <div class="adjustment-btns text-center">
                                        <fieldset class="pair-fieldset-main">
                                            <legend class="float-none w-auto p-2">pair</legend>
                                            <div class="product-count">
                                                <button class="btn decrease-btn">-</button>
                                                <span class="quantity">1</span>
                                                <button class="btn increase-btn">+</button>
                                            </div>
                                        </fieldset>
                                        <h6 class="text-center mt-3">Taka: 00.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="eye-section">
                                <h6 class="text-center">Second eye</h6>
                                <form>
                                    <select class="power-select">
                                        <option value="">Select power</option>
                                        <option value="+0.50">+0.50</option>
                                        <option value="+1.00">+1.00</option>
                                        <option value="+1.50">+1.50</option>
                                        <option value="+2.00">+2.00</option>
                                        <option value="+2.50">+2.50</option>
                                        <option value="+3.00">+3.00</option>
                                    </select>
                                </form>
                                <div class="power-section">
                                    <span class="power-value">0.50</span>
                                    <div class="adjustment-btns text-center">
                                        <fieldset class="pair-fieldset-main">
                                            <legend class="float-none w-auto p-2">pair</legend>
                                            <div class="product-count">
                                                <button class="btn decrease-btn">-</button>
                                                <span class="quantity">1</span>
                                                <button class="btn increase-btn">+</button>
                                            </div>
                                        </fieldset>
                                        <h6 class="text-center mt-3">Taka: 00.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="closed-content">
                        <!-- Closed content for the home tab -->
                        <div class="eye-section">
                            <h6 class="text-center">First eye</h6>
                            <form>
                                <select class="power-select">
                                    <option value="">Select power</option>
                                    <option value="+0.50">+0.50</option>
                                    <option value="+1.00">+1.00</option>
                                    <option value="+1.50">+1.50</option>
                                    <option value="+2.00">+2.00</option>
                                    <option value="+2.50">+2.50</option>
                                    <option value="+3.00">+3.00</option>
                                </select>
                            </form>
                            <div class="power-section">
                                <span class="power-value">0.50</span>
                                <div class="adjustment-btns text-center">
                                    <fieldset class="pair-fieldset-main">
                                        <legend class="float-none w-auto p-2">pair</legend>
                                        <div class="product-count">
                                            <button class="btn decrease-btn">-</button>
                                            <span class="quantity">1</span>
                                            <button class="btn increase-btn">+</button>
                                        </div>
                                    </fieldset>
                                    <h6 class="text-center mt-3">Taka: 00.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <a href="#" class="add-to-cart-button w-100 mt-4">Add to Cart - ৳ {{ $product->price }}</a>
        <form class="mt-5">
            <label for="country">CHECK WHAT IS OUT OF STOCK</label>
            <select id="country" name="country" class="form-control">
                <option value="">Please Choose an option</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
                <option value="">+0.50</option>
            </select>
            <input type="submit" style="border: 1px solid black; background-color: white; color: black;" value="NOTIFY ME"/>
        </form>
        </div>
        <!-- description -->
        <div
            style="
                width: 100%;
                max-width: 600px;
                margin: 50px auto;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
                position: relative;
                ">
        <!-- Vertical Center Border -->
        <div
            style="
                position: absolute;
                top: 0;
                bottom: 0;
                left: 50%;
                width: 1px;
                background-color: #ddd;
                transform: translateX(-50%);
                ">
        </div>

        <!-- First Row -->
        <div
            style="
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid #ddd;
                padding: 10px 0;
                ">
            <div style="flex: 1;">
                <a class="open-custom-sidebar" href="#" style="text-decoration: none; color: black;">Description</a>
            </div>

            <!-- Custom Sidebar Modal -->
            <div class="custom-sidebar">
                <div class="sidebar-header" style="border-bottom: 1px solid #e0e0e0; display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                    <a class="navbar-brand" href="#" style="font-size: 18px; display: flex; align-items: center; text-decoration: none; color: #000;">
                        <span style="font-size: 18px; margin-left: 10px; margin-top:-55px">Description</span>
                    </a>
                    <span class="custom-closebtn" style="font-size: 24px; cursor: pointer;">&times;</span>
                </div>
                <div class="custom-accordion">
                    {!! $product->description !!}
                </div>
            </div>

            <div
                style="
                    width: 30px;
                    font-weight: bold;
                    padding-left: 10px;
                ">
                +
            </div>
            <div style="flex: 1; padding-left: 20px;">
                <a class="open-custom-sidebar" href="#" style="text-decoration: none; color: black;">More Information</a>
            </div>
            <div
                style="
                    width: 30px;
                    font-weight: bold;
                    padding-left: 10px;
                ">
                +
            </div>
        </div>

        <!-- More Information Sidebar -->
        <div class="custom-sidebar">
            <div class="sidebar-header" style="border-bottom: 1px solid #e0e0e0; display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                <a class="navbar-brand" href="#" style="font-size: 18px; display: flex; align-items: center; text-decoration: none; color: #000;">
                    <span style="font-size: 18px; margin-left: 10px; margin-top:-55px">More Information</span>
                </a>
                <span class="custom-closebtn" style="font-size: 24px; cursor: pointer;">&times;</span>
            </div>
            <div class="custom-accordion">
                <!-- Content for More Information -->
                <p>More Information content goes here.</p>
            </div>
        </div>

        <!-- Second Row -->
        <div
            style="
                display: flex;
                justify-content: space-between;
                padding: 10px 0;
                ">
            <div style="flex: 1;">
                <a class="open-custom-sidebar" href="#" style="text-decoration: none; color: black;">Power Range</a>
            </div>
            <div
                style="
                    width: 30px;
                    font-weight: bold;
                    padding-left: 10px;
                ">
                +
            </div>
            <div style="flex: 1; padding-left: 20px;">
                <a class="open-custom-sidebar" href="#" style="text-decoration: none; color: black;">Lens Parameters</a>
            </div>
            <div
                style="
                    width: 30px;
                    font-weight: bold;
                    padding-left: 10px;
                ">
                +
            </div>
        </div>

        <!-- Power Range Sidebar -->
        <div class="custom-sidebar">
            <div class="sidebar-header" style="border-bottom: 1px solid #e0e0e0; display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                <a class="navbar-brand" href="#" style="font-size: 18px; display: flex; align-items: center; text-decoration: none; color: #000;">
                    <span style="font-size: 18px; margin-left: 10px; margin-top:-55px">Power Range</span>
                </a>
                <span class="custom-closebtn" style="font-size: 24px; cursor: pointer;">&times;</span>
            </div>
            <div class="custom-accordion">
                <!-- Content for Power Range -->
                <p>Power Range content goes here.</p>
            </div>
        </div>

        <!-- Lens Parameters Sidebar -->
        <div class="custom-sidebar">
            <div class="sidebar-header" style="border-bottom: 1px solid #e0e0e0; display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                <a class="navbar-brand" href="#" style="font-size: 18px; display: flex; align-items: center; text-decoration: none; color: #000;">
                    <span style="font-size: 18px; margin-left: 10px; margin-top:-55px">Lens Parameters</span>
                </a>
                <span class="custom-closebtn" style="font-size: 24px; cursor: pointer;">&times;</span>
            </div>
            <div class="custom-accordion">
                <!-- Content for Lens Parameters -->
                <p>Lens Parameters content goes here.</p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="lightbox" id="lightbox">
    <img src="" alt="Lightbox Image" id="lightbox-img" />
</div>
@endsection
@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.imageAlbum').click(function(){
                let imagePath = $(this).attr('src');
                $('#mainImage').attr('src', imagePath)
            });
        });
    </script>
    <script>
        function selectTab(tabId) {
            document.getElementById(tabId).checked = true;
        }
    </script>

    <script>
        // Function to handle selector change and button visibility
        function handlePowerSelectChange(select) {
            const selectedValue = select.value;
            const powerValueSpan = select.parentElement.nextElementSibling.querySelector(".power-value");
            powerValueSpan.textContent = selectedValue;

            const adjustmentBtns = select.parentElement.nextElementSibling.querySelector(".adjustment-btns");
            adjustmentBtns.style.display = "block";
        }

        // Add event listeners for power selectors
        document.querySelectorAll(".power-select").forEach((select) => {
            select.addEventListener("change", function() {
                handlePowerSelectChange(this);
            });
        });

        // Add event listeners for increase buttons
        document.querySelectorAll(".increase-btn").forEach((button) => {
            button.addEventListener("click", function() {
                const quantitySpan = this.parentElement.querySelector(".quantity");
                let currentQuantity = parseInt(quantitySpan.textContent);
                currentQuantity += 1;
                quantitySpan.textContent = currentQuantity;
            });
        });

        // Add event listeners for decrease buttons
        document.querySelectorAll(".decrease-btn").forEach((button) => {
            button.addEventListener("click", function() {
                const quantitySpan = this.parentElement.querySelector(".quantity");
                let currentQuantity = parseInt(quantitySpan.textContent);
                if (currentQuantity > 1) {
                    currentQuantity -= 1;
                    quantitySpan.textContent = currentQuantity;
                }
            });
        });

        // Toggle content visibility
        document.querySelectorAll(".toggle-btn").forEach((button) => {
            button.addEventListener("click", function() {
                const target = document.querySelector(this.getAttribute("data-target"));
                const openContent = target.querySelector(".open-content");
                const closedContent = target.querySelector(".closed-content");

                if (openContent.style.display === "none") {
                    openContent.style.display = "block";
                    closedContent.style.display = "none";
                    this.querySelector("i").classList.remove("fa-toggle-off");
                    this.querySelector("i").classList.add("fa-toggle-on");
                } else {
                    openContent.style.display = "none";
                    closedContent.style.display = "block";
                    this.querySelector("i").classList.remove("fa-toggle-on");
                    this.querySelector("i").classList.add("fa-toggle-off");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Initialize vertical slider
            $(".vertical-slider").slick({
                slidesToShow: 5,
                slidesToScroll: 3,
                vertical: true,
                verticalSwiping: true,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        vertical: false,
                        verticalSwiping: false,
                    },
                }, ],
            });

            // Change main image on click
            $(".vertical-slider img").click(function() {
                var imgSrc = $(this).attr("data-src");
                $(".main-image").attr("src", imgSrc);
            });

            // Show lightbox on main image click
            $(".main-image").click(function() {
                var imgSrc = $(this).attr("src");
                $("#lightbox-img").attr("src", imgSrc);
                $("#lightbox").addClass("active");
            });

            // Hide lightbox on click
            $("#lightbox").click(function() {
                $(this).removeClass("active");
            });
        });

        document.querySelectorAll(".tab").forEach((tab) => {
            tab.addEventListener("click", () => {
                document
                    .querySelectorAll(".tab")
                    .forEach((t) => t.classList.remove("selected"));
                tab.classList.add("selected");

                // Hide all sections initially
                document.getElementById("pair-state").style.display = "none";
                document.getElementById("with-power-state").style.display = "none";

                // Check which tab is selected and show respective section
                if (tab.id === "tab1") {
                    document.getElementById("pair-state").style.display = "block";
                } else if (tab.id === "tab2") {
                    document.getElementById("with-power-state").style.display = "block";
                }
            });
        });

        // Product increment and decrement logic
        let quantity = 1; // Initial quantity

        document.getElementById("increment").addEventListener("click", () => {
            quantity++;
            document.getElementById("quantity").textContent = quantity;
        });

        document.getElementById("decrement").addEventListener("click", () => {
            if (quantity > 1) {
                quantity--;
                document.getElementById("quantity").textContent = quantity;
            }
        });
    </script>
    <script>
        // Sidebar functionality using classes
        const openSidebarBtns = document.querySelectorAll('.open-custom-sidebar');
        const closeSidebarBtns = document.querySelectorAll('.custom-closebtn');
        const sidebars = document.querySelectorAll('.custom-sidebar');

        openSidebarBtns.forEach((btn, index) => {
            btn.addEventListener('click', function(event) {
                event.preventDefault();
                sidebars[index].classList.add('show');
            });
        });

        closeSidebarBtns.forEach((btn, index) => {
            btn.addEventListener('click', function(event) {
                event.preventDefault();
                sidebars[index].classList.remove('show');
            });
        });
    </script>
@endpush
