<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Robocon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-stars.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="{{ asset('style2.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>
<body>
        <div class="body-wrapper">
        @include('layouts.header')
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <div style="width: 100%;">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    <div class="single-slide align-center-left animation-style-01 bg-1" >
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>$1209.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide align-center-left animation-style-02 bg-2">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>$824.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide align-center-left animation-style-01 bg-3">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>$1849.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="product-area pt-55 pb-25 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="li-product-tab">
                            <ul class="nav li-product-menu">
                                <li><a class="active" data-toggle="tab" href="{{ route('products') }}"><span>Bộ siêu tập sản phẩm</span></a></li>
                            </ul>               
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-3 col-sm-6 mb-4"> 
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{ route('profile.edit') }}">
                                                <img src="images/product/{{$product->image}}" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">Mới</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="#">{{$product->name}}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">{{$product->sale_price}} VNĐ</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="list-unstyled d-flex">
                                                    <li class="mr-1">
                                                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                                                        </form>
                                                    </li>
                                                    <li class="mr-1">
                                                        <a class="btn btn-outline-danger" href="wishlist.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-outline-info" href="quickview.html" data-toggle="modal" data-target="#exampleModalCenter">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <div class="btn-see-more-container">
                            <a href="{{ route('products') }}">Xem Thêm...</a>
                        </div>
                        <style>
                            .btn-see-more-container {
                                display: flex; 
                                justify-content: center;
                                align-items: center;
                                height: 100px; 
                            }

                            .btn-see-more-container a {
                                display: inline-block;
                                background-color: #007bff;
                                color: #fff;
                                padding: 10px 20px;
                                text-align: center;
                                border-radius: 5px;
                                text-decoration: none;
                                font-size: 16px;
                                cursor: pointer;
                                transition: background-color 0.3s ease;
                            }

                            .btn-see-more-container a:hover {
                                background-color: #0056b3;
                            }
                        </style>                      
                    </div>
                </div>
            </div>

            </div>
            <div class="li-static-banner li-static-banner-4 text-center pt-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-banner pb-sm-30 pb-xs-30">
                                <a href="#">
                                    <img src="images/banner/2_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="images/banner/2_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <a href="">
                                    <h2><span>Bài viết mới nhất</span></h2>
                                </a>
                            </div>
                            <div id="latestPostsCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            @foreach($articles as $article)
                                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                                <div class="post-card">
                                                    <div class="post-image">
                                                        <img src="images\articles\{{$article->image}}" alt="Bài viết 1" class="img-fluid" style="width: 100%; height: auto; margin-bottom: 20px;">
                                                    </div>
                                                    <div class="post-content">
                                                        <h5>{{ $article->title }}</h5> 
                                                        <p>{{ Str::limit($article->content, 100) }}...</p> 
                                                        <div class="d-flex justify-content-between align-items-center">
                                                        <span class="post-meta">
                                                            <i class="bi bi-calendar"></i> 
                                                            {{ $article->created_at->day }}/{{ $article->created_at->month }}/{{ $article->created_at->year }}
                                                        </span>
                                                            <a href="#" class="read-more">Xem thêm ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-see-more-container">
                            <a href="{{ route('profile.edit') }}">Xem Thêm...</a>
                        </div>                   
                        </div>
                    </div>
                </div>
            </section>
      
            <div class="footer">
                <div class="footer-static-top">
                    <div class="container">
                        <div class="footer-shipping pt-60 pb-25">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Miễn phí vận chuyển</h2>
                                            <p>Và trả lại miễn phí. Xem thanh toán để biết ngày giao hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Thanh toán an toàn</h2>
                                            <p>Thanh toán bằng các phương thức thanh toán an toàn và phổ biến nhất thế giới.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Mua sắm với sự tự tin</h2>
                                            <p>Bảo vệ người mua của chúng tôi bao gồm việc mua hàng của bạn từ nhấp chuột đến giao hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Trung tâm trợ giúp 24/7</h2>
                                            <p>Có một câu hỏi? Gọi cho Chuyên gia hoặc trò chuyện trực tuyến.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-logo">
                                    <div class="logo pb-sm-30 pb-xs-30">
                                <img src="images/logo.png"   style="width: 100px; margin-left:60px" alt="">
                                </div>
                                        <p class="info">
                                        Tôi là Nguyễn Hữu Thành    
                                        </p>
                                    </div>
                                    <ul class="des">
                                        <li>
                                            <span>Địa chỉ: </span>
                                            Hải Phòng
                                        </li>
                                        <li>
                                            <span>Điện thoại: </span>
                                            <a href="#">(+84) 123 321 345</a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href="mailto://info@yourdomain.com">nguyenhuuthanh06022004@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Sản phẩm</h3>
                                        <ul>
                                            <li><a href="#">Giảm giá</a></li>
                                            <li><a href="#">Sản phẩm mới</a></li>
                                            <li><a href="#">Sản phẩm bán chạy</a></li>
                                            <li><a href="#">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Công ty</h3>
                                        <ul>
                                            <li><a href="#">Vận chuyển</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Theo dõi</h3>
                                        <ul class="social-link">
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="rss">
                                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google +">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/nht.624" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/ajax-mail.js') }}"></script>
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.barrating.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/venobox.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/scrollUp.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
