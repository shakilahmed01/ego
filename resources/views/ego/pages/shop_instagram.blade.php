@extends('layouts.ego-app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- CSS links-->
<!-- fancybox -->
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
<!-- magnific-popup -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<link rel="stylesheet" href="{{asset('ego/shop_instagram.css')}}">
<section class="portfolio-section" id="portfolio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Shop Instagram</h2>
                <p class="text-light">Welcome to Ego Vision world! <br>
                    Discover the eyes looks with our vibrant shades and see how the lenses could appear on you! Tag @desioeyes for a chance to be featured</p>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">
            <nav class="controls">
                <button type="button" class="control outline  p-4" data-filter="all">All Shades </button>
                <button type="button" class="control outline  p-4" data-filter=".web">Brown Lenses</button>
                <button type="button" class="control outline  p-4" data-filter=".dev">Grey Lenses</button>
                <button type="button" class="control outline  p-4" data-filter=".wp">Green Lenses</button>
            </nav>
        </div>
        <ul class="row portfolio-item">
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" itemprop="thumbnail" alt="Image description" />
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Model Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- JS Links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- Mixitup -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
<!-- fancybox -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
<!-- Fancybox js -->
<script>
    /*Downloaded from https://www.codeseek.co/ezra_siton/mixitup-fancybox3-JydYqm */
    // 1. querySelector
    var containerEl = document.querySelector(".portfolio-item");
    // 2. Passing the configuration object inline
    //https://www.kunkalabs.com/mixitup/docs/configuration-object/
    var mixer = mixitup(containerEl, {
        animation: {
            effects: "fade translateZ(-100px)",
            effectsIn: "fade translateY(-100%)",
            easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
        }
    });
    // fancybox insilaze & options //
    $("[data-fancybox]").fancybox({
        loop: true,
        hash: true,
        transitionEffect: "slide",
        /* zoom VS next////////////////////
        clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
        clickContent: function(current, event) {
            return current.type === "image" ? "next" : false;
        }
    });
</script>
@endsection
