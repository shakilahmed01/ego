<style>
    .carousel-item {
        height: 80vh;
        background-size: cover;
        background-position: center;
    }

    @media (max-width: 992px) {
        .carousel-item {
            height: 60vh;
            /* Adjust height for smaller devices if needed */
        }
    }
</style>

<style>
    .position-relative {
        position: relative;
    }

    .image-text {
        position: absolute;
        bottom: 0;
        width: 100%;
        color: #fff;
        padding: 5px 0;
        font-size: 14px;
    }
</style>
<!-- header -->
<header>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('ego/img1.jpeg')">
                <a href="addToCart.html" class="stretched-link">
                    <div class="carousel-caption d-md-block">
                        <h1 class=" hd" style="font-size:45px">The Model is wearing</h1>
                        <p class="hd">Shop Color <i class="fa-solid fa-arrow-right mx-2"></i> </p>
                    </div>
                </a>
            </div>
            <div class="carousel-item" style="background-image: url('ego/img2.jpeg')">
                <a href="addToCart.html" class="stretched-link">
                    <div class="carousel-caption d-md-block">
                        <h1 class="hd" style="font-size:45px">Stylish Colors</h1>
                        <p class="hd">Shop Color <i class="fa-solid fa-arrow-righ t mx-2"></i> </p>
                    </div>
                </a>
            </div>
            <div class="carousel-item" style="background-image: url('ego/img3.jpeg')">
                <a href="addToCart.html" class="stretched-link">
                    <div class="carousel-caption d-md-block">
                        <h1 class="hd" style="font-size:45px">Quality and Comfort</h1>
                        <p class="hd">Shop Color<i class="fa-solid fa-arrow-right mx-2"></i> </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <style>
        /* Customize the button appearance */
        .navbar-toggler {
            border: none;
            background-color: transparent;
            cursor: pointer;
            padding: 0.5rem;
            transition: background-color 0.3s ease;
        }


        .navbar-toggler img {
            width: 30px;
            height: auto;
        }

        @media (max-width: 768px) {
            .navbar-toggler img {
                width: 20px;
            }
        }
        /* Hover effect */
        .navbar-toggler:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
    </style>

    <style>
        /* Modal Container */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            /* Could be more or less, depending on screen size */
            border-radius: 5px;
            position: relative;
            /* Relative positioning for close button */
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            /* Adjusted to top right */
            font-size: 25px;
            font-weight: bold;
            color: #888;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Language Select Dropdown */
        #language-select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
    <style>
        /* General styling for the container */

        /* Logo styling */
        .navbar-brand-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            margin: 0 auto;
            /* Ensure the link is centered */
        }




        /* Logo image styling */
        .navbar-brand-logo img {
            width: 200px;
            transition: transform 0.3s ease-in-out;
            /* Smooth transition for hover effect */
        }


        @media (max-width: 768px) {
            .navbar-brand-logo img {
                width: 140px;
                transition: transform 0.3s ease-in-out;
                margin-left: 58px;

            }
        }
    </style>

    <style>
        .badge {
            position: absolute;
            top: 0;
            right: 0;
            /* background-color:  black; */
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 5px;
            transform: translate(50%, -50%);
        }
    </style>
    <style>
        .cart-icon {
            font-size: 14px;
            display: inline-block;
            cursor: pointer;
        }

        .sidebar {
            position: fixed;
            top: 0;
            right: -445px;
            /* Adjust the initial position if needed */
            width: 445px;
            /* Increase the width as per your requirement */
            height: 100%;
            background-color: white;
            color: black;
            transition: right 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }


        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;

        }

        .sidebar-header h2 {
            margin: 0;
        }

        .close-btn {
            font-size: 1.5rem;
            cursor: pointer;
        }

        .sidebar-content {
            padding: 1rem;
        }

        .overlay-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 999;
        }

        .overlay-sidebar.show {
            display: block;
        }

        .sidebar.show {
            right: 0;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                right: -300px;
                /* Adjust the initial position if needed */
                width: 300px;
                /* Increase the width as per your requirement */
                height: 100%;
                background-color: white;
                color: black;
                transition: right 0.3s ease;
                z-index: 1000;
                overflow-y: auto;
            }
        }
    </style>
    <style>
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            width: 100px;
            height: auto;
        }

        .footer-text {
            background-color: black;
            color: white;
            padding: 10px;
            text-align: center;

            .counter {
                display: flex;
                align-items: center;
            }

            .number {
                margin: 0 15px;
                font-size: 1.5rem;
            }
        }

        /* --------------------------------------------------- */

        .cart-item {
            display: flex;
            gap: 15px;
            /* Spacing between image and details */
            margin-bottom: 20px;
            /* Spacing below the cart item */
            position: relative;
        }

        .image-container {
            position: relative;
            width: 100px;
        }

        .image-container img {
            width: 100px;
            height: 130px;
        }

        .close-icon {
            position: absolute;
            top: -25px;
            left: -11px;
            color: black;
            padding: 2px 5px;
            cursor: pointer;
            font-size: 35px;
        }

        .cart-details {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cart-details p,
        .cart-details h5 {
            margin-bottom: -6px;
            /* Decreased line spacing */
        }

        .counter-container {
            display: flex;
            align-items: center;
            gap: 10px;
            /* Spacing between buttons and number */
            margin-top: 15px;
            /* Spacing above the counter */
        }

        .counter-container .btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .counter-container .number {
            font-size: 20px;
            width: 40px;
            text-align: center;
        }

        .cart-subtotal,
        .footer-text {
            text-align: center;
        }

        .buttons {
            gap: 10px;
        }

        .footer-text p {
            margin-bottom: 5px;
            /* Spacing between paragraphs */
        }
    </style>
    <!-- Header content including Navbars -->
    <div class="header-content" style="margin-top: 15px; padding-top: 15px;">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light;">
            <div class="container-fluid" style="padding: 5px;">
                <!-- Left side: Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <img src="{{ asset('ego/toggle.svg') }}" alt="Toggle Button">
                </button>

                <a class="navbar-brand d-none d-sm-block" href="#" id="language-selector" style="font-size: 14px; color: white">
                    <i class="fas fa-globe"></i> <span id="language-text">EN</span>
                </a>
                <div id="language-modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>@lang('messages.select_language')</h3>
                        <select id="language-select">
                            <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                            <option value="hi" {{ app()->getLocale() == 'hi' ? 'selected' : '' }}>Hindi</option>
                            <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>Russian</option>
                            <option value="zh" {{ app()->getLocale() == 'zh' ? 'selected' : '' }}>Chinese</option>
                        </select>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const languageSelect = document.getElementById('language-select');
                        const languageText = document.getElementById('language-text');

                        // Update the language text based on the current locale
                        const currentLocale = "{{ app()->getLocale() }}";
                        switch (currentLocale) {
                            case 'en':
                                languageText.textContent = 'ENGLISH';
                                languageSelect.value = 'en';
                                break;
                            case 'hi':
                                languageText.textContent = 'HINDI';
                                languageSelect.value = 'hi';
                                break;
                            case 'ru':
                                languageText.textContent = 'RUSSIAN';
                                languageSelect.value = 'ru';
                                break;
                            case 'zh':
                                languageText.textContent = 'CHINESE';
                                languageSelect.value = 'zh';
                                break;
                        }

                        languageSelect.addEventListener('change', function() {
                            var selectedLanguage = this.value;
                            // Update the language text dynamically
                            switch (selectedLanguage) {
                                case 'en':
                                    languageText.textContent = 'ENGLISH';
                                    break;
                                case 'hi':
                                    languageText.textContent = 'HINDI';
                                    break;
                                case 'ru':
                                    languageText.textContent = 'RUSSIAN';
                                    break;
                                case 'zh':
                                    languageText.textContent = 'Chinese';
                                    break;
                            }
                            // Redirect to the new URL
                            window.location.href = '{{ url("lang") }}/' + selectedLanguage;
                        });
                    });
                </script>





                <!-- Middle: Logo -->
                <div class="navbar-brand-container-logo">
                    <a class="navbar-brand-logo" href="{{ route('ego.index') }}">
                        <img src="{{ asset('ego/ego_main_log.png') }}" alt="Logo" />
                    </a>
                </div>

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
                <!-- Right side: Account link -->
                <div class="d-flex">
                    @guest
                    @if (Route::has('user.login'))
                    <a class="navbar-brand d-sm-block" href="{{ route('ego.login') }}"
                        style="font-size: 14px; color: white">ACCOUNT</a>
                    @endif
                    @else

                    <a
                        class="navbar-brand d-none d-sm-block"
                        href="{{route('user.home')}}"
                        style="display: flex; align-items: center; font-size: 14px; color: white;">
                        {{ Auth::user()->fullname }}
                    </a>

                    <!-- Search Icon -->
                    <a class="navbar-brand mx-2" href="#" id="search-icon" style="display: flex; align-items: center; font-size: 14px;">
                        <img src="{{asset('ego/search-icon.svg')}}" alt="Search" style="height: 14px; width: 14px; margin-right: 5px;" />
                    </a>
                    <!-- Search Bar Popup -->
                    <div id="search-popup" class="search-popup">
                        <div class="search-popup-content">
                            <button type="button" id="close-popup" class="close-button">&times;</button>
                            <div class="input-container">
                                <input type="text" id="search-input" placeholder="Search..." />
                                <img src="{{asset('ego/search-icon_black.svg')}}" alt="Search" class="search-icon" />
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById("search-icon").addEventListener("click", function() {
                            document.getElementById("search-popup").style.display = "flex";
                        });

                        document.getElementById("close-popup").addEventListener("click", function() {
                            document.getElementById("search-popup").style.display = "none";
                        });

                        // Optional: Close popup when clicking outside the search bar content
                        document.getElementById("search-popup").addEventListener("click", function(e) {
                                    if (e.target == this) {

                                        document.getElementById("search-popup").style.display = "none";
                                    });

                                // Optional: Close popup when clicking outside the search bar content
                                document.getElementById("search-popup").addEventListener("click", function(e) {
                                    if (e.target == this) {
                                        document.getElementById("search-popup").style.display = "none";
                                    }
                                });
                    </script>


                    <a class="navbar-brand mx-2" href="#"
                        style="display: flex; align-items: center; font-size: 14px;">
                        <img src="{{ asset('ego/love_shape.svg') }}" alt="Love"
                            style="height: 14px; width: 14px; margin-right: 5px;" />
                    </a>

                    <a class="navbar-brand" href="#" id="openSidebar"
                        style="display: flex; align-items: center; font-size: 14px; position: relative;">
                        <img src="{{ asset('ego/cart_shape.svg') }}" alt="Cart"
                            style="height: 14px; width: 14px; margin-right: 5px;" />
                        <span class="badge"
                            style="font-size: 10px; position: absolute; top: -5px; right: -5px;">2</span>
                    </a>


                    @endguest
                    <div class="sidebar" id="sidebar" style=" background-color: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.1); color: #000;">
                        <div class="sidebar-header" style="padding: 15px; border-bottom: 1px solid #e0e0e0; display: flex; justify-content: space-between; align-items: center;">
                            <a class="navbar-brand" href="#" class="cart-icon" style="font-size: 18px; display: flex; align-items: center; text-decoration: none; color: #000;">
                                <img src="{{ asset('ego/cart_shape_black.svg') }}" alt="Cart" style="width: 24px; height: 24px;" />
                                <span style="font-size: 18px; margin-left: 10px; font-weight: 600;">Cart</span>
                            </a>
                            <span class="close-btn" id="closeSidebar" style="font-size: 24px; cursor: pointer;">&times;</span>
                        </div>
                        <div class="sidebar-content" style="padding: 15px;">
                            <div class="cart-item" style="display: flex; align-items: stretch; margin-bottom: 20px; height: 150px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 10px;">
                                <div class="image-container" style="width: 80px; height: 100%; position: relative; flex-shrink: 0;">
                                    <img src="https://www.desiolens.com/media/catalog/product/cache/e7eb269865e0ace66618af435eea5d86/d/e/deep_brown_desio_colored_contact_lenses_1_61.jpg" alt="Random Image" style="width: 100%; height: 100%; object-fit: cover;">
                                    <span class="close-icon" style="position: absolute; top: -10px; right: -10px; color: black; padding: 2px 6px; cursor: pointer; font-size: 18px;">&times;</span>
                                </div>

                                <div class="cart-details" style="flex-grow: 1; padding-left: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div>
                                        <h5 style="font-size: 14px; font-weight: 600; margin: 0 0 6px 0;">DEEP BROWN MS TORIC DX</h5>
                                        <p style="margin: 2px 0; line-height: 1.2; font-size: 12px;">Power: -0.25</p>
                                        <p style="margin: 2px 0; line-height: 1.2; font-size: 12px;">Cylinder: -1.00</p>
                                        <p style="margin: 2px 0; line-height: 1.2; font-size: 12px;">Axis: 130°</p>
                                    </div>

                                    <!-- Price and Quantity Section -->
                                    <div style="margin-top: 10px; display: flex; align-items: center; justify-content: space-between;">
                                        <!-- Quantity Selector -->
                                        <div class="quantity-selector" style="display: inline-flex; align-items: center; border: 1px solid black; padding: 1px; font-size: 12px;">
                                            <button class="quantity-btn" id="decreaseQuantity" style="padding: 4px 8px; background-color: transparent; border: none; cursor: pointer; font-size: 14px; font-weight: 600; color: black;">-</button>
                                            <span class="quantity-number" id="quantityValue" style="padding: 4px 8px; font-size: 12px; color: black;">0</span>
                                            <button class="quantity-btn" id="increaseQuantity" style="padding: 4px 8px; background-color: transparent; border: none; cursor: pointer; font-size: 14px; font-weight: 600; color: black;">+</button>
                                        </div>
                                        <!-- Price -->
                                        <span style="font-size: 14px; font-weight: 600; margin-left: 10px;">€167.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons d-flex justify-content-between my-3" style="margin-top: 25px;">
                                <button class="add-to-cart-button-more" style="width: 45%;">MORE</button>
                                <button class="add-to-cart-button" style="width: 45%;">Bag</button>
                            </div>

                            <div class="cart-subtotal my-4" style="border-top: 1px solid #e0e0e0; padding-top: 20px; text-align: center;">
                                <h4 style="font-size: 18px; font-weight: 600;">CART SUBTOTAL: €167.00</h4>
                            </div>

                            <div class="footer-text mt-5 text-center" style="color: white;">
                                <p style="margin-bottom: 5px; font-size: 14px; font-weight: 600;">FREE SAMPLES</p>
                                <p style="font-size: 13px; margin-bottom: 5px;">Go to your SHOPPING BAG to pick your FREE samples.</p>
                                <p style="font-size: 13px;">You can select up to 4 with your order!</p>
                            </div>
                        </div>
                    </div>

                    <style>
                        .add-to-cart-button {
                            padding: 10px 20px;
                            background-color: black;
                            color: white;
                            border: none;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            cursor: pointer;
                            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
                        }

                        .add-to-cart-button:hover {
                            background-color: white;
                            color: black;
                            border: 1px solid black;
                        }

                        .add-to-cart-button-more {
                            padding: 10px 20px;
                            background-color: white;
                            color: black;
                            border: 1px solid black;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            cursor: pointer;
                            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
                        }

                        .add-to-cart-button-more:hover {
                            background-color: black;
                            color: white;
                            border: 1px solid black;
                        }

                        .close-icon {
                            position: absolute;
                            top: -5px;
                            right: -5px;
                            color: black;
                            border-radius: 50%;
                            padding: 2px 6px;
                            cursor: pointer;
                            font-size: 12px;
                        }

                        .cart-item {
                            height: 150px;
                            /* Ensure the same height across items */
                        }

                        /* Default width */
                        .sidebar {
                            width: 350px;
                        }


                        /* For screens smaller than 480px (e.g., mobile devices) */
                        @media (max-width: 480px) {
                            .sidebar {
                                width: 300px;
                            }
                        }

                        .quantity-btn {
                            background-color: transparent;
                            border: none;
                            cursor: pointer;
                            font-size: 18px;
                            font-weight: bold;
                            color: black;
                        }

                        .quantity-number {
                            padding: 8px 16px;
                            font-size: 16px;
                            font-weight: bold;
                            color: black;
                            text-align: center;
                            min-width: 30px;
                        }

                        .quantity-selector {
                            display: inline-flex;
                            align-items: center;
                            border: 1px solid black;
                        }
                    </style>

                    <script>
                        document.getElementById('increaseQuantity').addEventListener('click', function() {
                            let quantity = parseInt(document.getElementById('quantityValue').textContent);
                            document.getElementById('quantityValue').textContent = quantity + 1;
                        });

                        document.getElementById('decreaseQuantity').addEventListener('click', function() {
                            let quantity = parseInt(document.getElementById('quantityValue').textContent);
                            if (quantity > 0) {
                                document.getElementById('quantityValue').textContent = quantity - 1;
                            }
                        });
                    </script>
                    <div class="overlay-sidebar" id="overlay-sidebar"></div>
                </div>
            </div>
        </nav>
        <!-- Secondary Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid" style="border-bottom: .25px solid rgba(230, 230, 230, 0.3)">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto p-2">
                        <!-- mx-auto will center the items -->
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{route('ego.index')}}">@lang('messages.home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{route('ego.pages.collection.lense')}}">@lang('messages.collections')</a>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row" style="border-bottom: 1px solid  #8362a9;">
                                        <ul class="mega-links text-black">
                                            <p>TIMELESS COLLECTION - 3 TONES -</p>
                                            <li><a href="" class="text-black">Timeless Grey</a></li>
                                            <li><a href="" class="text-black">Forever #6c6c85;</a></li>
                                            <li><a href="" class="text-black">Eternal Brown</a></li>
                                            <li><a href="" class="text-black">Infinity Blue</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">

                                        <ul class="mega-links text-black">
                                            <p>ATTITUDE COLLECTION - 1 TONE - 1 MONTH</p>
                                            <li><a href="" class="text-black">Sublime Grey</a></li>
                                            <li><a href="" class="text-black">Lush #6c6c85;</a></li>
                                            <li><a href="" class="text-black">Shameless Hazel</a></li>
                                            <li><a href="" class="text-black">Angelic Blue</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links text-black">
                                            <p>ATTITUDE COLLECTION - 2 TONES - 3 MONTHS</p>
                                            <li><a href="" class="text-black">Bold Grey</a></li>
                                            <li><a href="" class="text-black">Deep Brown</a></li>
                                            <li><a href="" class="text-black">Rebel Grey</a></li>
                                            <li><a href="" class="text-black">Wild #6c6c85;</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links text-black">
                                            <p>ATTITUDE COLLECTION - 2 TONES - 3 MONTHS</p>
                                            <li><a href="" class="text-black">Precious Grey</a></li>
                                            <li><a href="" class="text-black">Charming #6c6c85;</a></li>
                                            <li><a href="" class="text-black">Tender Hazel</a></li>
                                            <li><a href="" class="text-black">Irresistible Blue</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="row" style="border-bottom: 1px solid  #8362a9;">
                                        <ul class="mega-links text-black">
                                            <p>TIMELESS COLLECTION - 3 TONES -</p>
                                            <li><a href="" class="text-black">Timeless Grey</a></li>
                                            <li><a href="" class="text-black">Forever #6c6c85;</a></li>
                                            <li><a href="" class="text-black">Eternal Brown</a></li>
                                            <li><a href="" class="text-black">Infinity Blue</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">

                                        <ul class="mega-links text-black">
                                            <p>ATTITUDE COLLECTION - 1 TONE - 1 MONTH</p>
                                            <li><a href="" class="text-black">Sublime Grey</a></li>
                                            <li><a href="" class="text-black">Lush #6c6c85;</a></li>
                                            <li><a href="" class="text-black">Shameless Hazel</a></li>
                                            <li><a href="" class="text-black">Angelic Blue</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links text-black">
                                            <p>ATTITUDE COLLECTION - 2 TONES - 3 MONTHS</p>
                                            <li><a href="" class="text-black">Bold Grey</a></li>
                                            <li><a href="" class="text-black">Deep Brown</a></li>
                                            <li><a href="" class="text-black">Rebel Grey</a></li>
                                            <li><a href="" class="text-black">Wild #6c6c85;</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links text-black">
                                            <p>ATTITUDE COLLECTION - 2 TONES - 3 MONTHS</p>
                                            <li><a href="" class="text-black">Precious Grey</a></li>
                                            <li><a href="" class="text-black">Charming #6c6c85;</a></li>
                                            <li><a href="" class="text-black">Tender Hazel</a></li>
                                            <li><a href="" class="text-black">Irresistible Blue</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{route('ego.pages.color.lense')}}">@lang('messages.colors')</a>
                            <div class="mega-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="row text-center mt-3">
                                        <div class="col-md-2 mb-3 position-relative">
                                            <a href="https://www.desiolens.com/media/wysiwyg/Innocent_white_desio_lenses_square.jpg" target="_blank">
                                                <img class="card-img-top" style="width: 100%;" src="https://www.desiolens.com/media/wysiwyg/Innocent_white_desio_lenses_square.jpg" alt="Card image cap">
                                                <div class="image-text">Innocent White</div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 mb-3 position-relative">
                                            <a href="https://www.desiolens.com/media/wysiwyg/Innocent_white_desio_lenses_square.jpg" target="_blank">
                                                <img class="card-img-top" style="width: 100%;" src="https://www.desiolens.com/media/wysiwyg/Innocent_white_desio_lenses_square.jpg" alt="Card image cap">
                                                <div class="image-text">Innocent White</div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 mb-3 position-relative">
                                            <a href="https://www.desiolens.com/media/wysiwyg/Sublime_grey_desio_lenses_square.jpeg" target="_blank">
                                                <img class="card-img-top" style="width: 100%;" src="https://www.desiolens.com/media/wysiwyg/Sublime_grey_desio_lenses_square.jpeg" alt="Card image cap">
                                                <div class="image-text">Sublime Grey</div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 mb-3 position-relative">
                                            <a href="https://www.desiolens.com/media/wysiwyg/Cappucino_desio_lenses_square.jpg" target="_blank">
                                                <img class="card-img-top" style="width: 100%;" src="https://www.desiolens.com/media/wysiwyg/Cappucino_desio_lenses_square.jpg" alt="Card image cap">
                                                <div class="image-text">Cappuccino</div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 mb-3 position-relative">
                                            <a href="https://www.desiolens.com/media/wysiwyg/Cappucino_desio_lenses_square.jpg" target="_blank">
                                                <img class="card-img-top" style="width: 100%;" src="https://www.desiolens.com/media/wysiwyg/Cappucino_desio_lenses_square.jpg" alt="Card image cap">
                                                <div class="image-text">Cappuccino</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{route('ego.pages.duration.lense')}} ">@lang('messages.duration')</a>
                            <div class=" mega-box">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links text-black">
                                            <a href=""><span style="text-align:left">MONTHLY LENSES</span></a>
                                            <br>
                                            <a href=""><span style="text-align:left">QUARTERLY LENSES - 3
                                                    MONTHS</span></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{ route('ego.pages.toric.lense') }}">@lang('messages.toric_lenses')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line"
                                href="{{ route('ego.pages.accessories') }}">@lang('messages.accessories')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{ route('ego.pages.shop.instagram') }}">@lang('messages.shop_instagram')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{ route('ego.pages.all.lenses') }}">@lang('messages.all_lenses')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-line" href="{{ route('ego.pages.about.lense') }}">@lang('messages.about_us')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            .nav-link {
                position: relative;
                padding-bottom: 5px;
                color: white;
                font-size: 14px;
            }

            .nav-link::after {
                content: '';
                position: absolute;
                width: 0;
                height: .25px;
                display: block;
                margin-top: 5px;
                right: 0;
                background: white;
                margin-top: 13px;
            }

            .nav-link:hover::after {
                width: 100%;
                right: 0;
            }
        </style>

        <style>
            .card-body {
                background-color: #f5f5f5;
                /* Light gray background color */
                padding: 1.25rem;
                /* Adjust padding as needed */
            }

            .card-footer {
                background-color: #f5f5f5;
                /* Light gray background color for footer */
                border-top: none;
                /* Optional: Remove default border-top for cleaner look */
            }

            .card-img-top img {
                transition: transform 0.9s ease-in-out, opacity 0.2s ease-in-out;

            }

            .card:hover .card-img-top img {
                opacity: 0.8;
                /* Adjust opacity as desired */
                width: 100px;
            }

            .card-img-top img:hover {
                transform: scale(1.1);
                /* Adjust scale factor as desired */
                opacity: 1;
                /* Ensure full opacity on hover */
            }

            .card-title:hover {
                text-decoration: underline;
            }

            .card-link {
                text-decoration: none;
                transition: text-decoration 0.3s;
            }

            .card-video-top {
                height: 645px;
                /* Adjust as needed */
                position: relative;
            }

            .card-video {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
                height: auto;
            }

            .card-link {
                color: inherit;
                text-decoration: none;
            }
        </style>
    </div>
</header>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('language-modal');
        var btn = document.getElementById('language-selector');
        var span = document.getElementsByClassName('close')[0];

        btn.onclick = function() {
            modal.style.display = 'block';
        };

        span.onclick = function() {
            modal.style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };
    });
</script>