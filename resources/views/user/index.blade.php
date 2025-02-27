<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>Furniture</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('logo/favicon.png') }}" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!--linear icon css-->
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



    <!--welcome-hero start -->
    <header id="home" class="welcome-hero">

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--/.carousel-indicator -->
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span>
                </li>
                <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
            </ol><!-- /ol-->
            <!--/.carousel-indicator -->

            <!--/.carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <!-- .item -->
                <div class="item active">
                    <div class="single-slide-item slide1">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>koleksi desain yang hebat</h4>
                                                <h2>meja modern</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad
                                                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip.
                                                </p>
                                                <div class="packages-price">
                                                    <p>
                                                        Rp.50.000
                                                        <del>Rp.100.000</del>
                                                    </p>
                                                </div>
                                                <button class="btn-cart welcome-add-cart"
                                                    onclick="window.location.href='#'">
                                                    <span class="lnr lnr-plus-circle"></span>
                                                    tambahkan <span>ke</span> keranjang
                                                </button>
                                                <button class="btn-cart welcome-add-cart welcome-more-info"
                                                    onclick="window.location.href='#'">
                                                    info lebih lanjut
                                                </button>
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="{{ asset('images/slider/meja1.png') }}" alt="gambar slider">
                                            </div><!--/.welcome-hero-img-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->

                <div class="item">
                    <div class="single-slide-item slide2">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>koleksi desain yang hebat</h4>
                                                <h2>rice cooker</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad
                                                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip.
                                                </p>
                                                <div class="packages-price">
                                                    <p>
                                                        Rp.70.000
                                                        <del>Rp.100.000</del>
                                                    </p>
                                                </div>
                                                <button class="btn-cart welcome-add-cart"
                                                    onclick="window.location.href='#'">
                                                    <span class="lnr lnr-plus-circle"></span>
                                                    tambahkan <span>ke</span> keranjang
                                                </button>
                                                <button class="btn-cart welcome-add-cart welcome-more-info"
                                                    onclick="window.location.href='#'">
                                                    info lebih lanjut
                                                </button>
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="{{ asset('images/slider/nasi2.png') }}" alt="gambar slider">
                                            </div><!--/.welcome-hero-img-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item-->

                <div class="item">
                    <div class="single-slide-item slide3">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>koleksi desain yang hebat</h4>
                                                <h2>kursi aksen beludru</h2>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad
                                                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip.
                                                </p>
                                                <div class="packages-price">
                                                    <p>
                                                        Rp.200.000
                                                        <del>Rp.100.000</del>
                                                    </p>
                                                </div>
                                                <button class="btn-cart welcome-add-cart"
                                                    onclick="window.location.href='#'">
                                                    <span class="lnr lnr-plus-circle"></span>
                                                    tambahkan <span>ke</span> keranjang
                                                </button>
                                                <button class="btn-cart welcome-add-cart welcome-more-info"
                                                    onclick="window.location.href='#'">
                                                    info lebih lanjut
                                                </button>
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="{{ asset('images/slider/slider3.png') }}" alt="gambar slider">
                                            </div><!--/.welcome-hero-img-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item-->
            </div>
            <!-- /.carousel-inner-->

        </div><!--/#header-carousel-->

        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy"
                    data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Cari">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <div class="container">
                        <!-- Start Attribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="search">
                                    <a href="#"><span class="lnr lnr-magnifier"></span></a>
                                </li><!--/.search-->
                                <li class="nav-setting">
                                    <a href="#"><span class="lnr lnr-cog"></span></a>
                                </li><!--/.nav-setting-->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="lnr lnr-cart"></span>
                                        <span class="badge badge-bg-1">2</span>
                                    </a>
                                    <ul class="dropdown-menu cart-list s-cate">
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img
                                                    src="{{ asset('images/collection/arrivals1.png') }}"
                                                    class="cart-thumb" alt="gambar" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">kursi <br> lengan</a></h6>
                                                <p>1 x - <span class="price">Rp.300.000</span></p>
                                            </div><!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div><!--/.cart-close-->
                                        </li><!--/.single-cart-list -->
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img
                                                    src="{{ asset('images/collection/arrivals2.png') }}"
                                                    class="cart-thumb" alt="gambar" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">kursi <br> tunggal</a></h6>
                                                <p>1 x - <span class="price">Rp.300.000</span></p>
                                            </div><!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div><!--/.cart-close-->
                                        </li><!--/.single-cart-list -->
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img
                                                    src="{{ asset('images/collection/arrivals3.png') }}"
                                                    class="cart-thumb" alt="gambar" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">kursi kayu <br> lengan</a></h6>
                                                <p>1 x - <span class="price">Rp.150.000</span></p>
                                            </div><!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div><!--/.cart-close-->
                                        </li><!--/.single-cart-list -->
                                        <li class="total">
                                            <span>Total: Rp.0,00</span>
                                            <button class="btn-cart pull-right"
                                                onclick="window.location.href='#'">lihat keranjang</button>
                                        </li>
                                    </ul>
                                </li><!--/.dropdown-->
                            </ul>
                        </div><!--/.attr-nav-->
                        <!-- End Attribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">Peralatan Rumah Tangga</a>
                        </div><!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="scroll active"><a href="#home">beranda</a></li>
                                <li class="scroll"><a href="#new-arrivals">produk baru</a></li>
                                <li class="scroll"><a href="#feature">fitur</a></li>
                                <li class="scroll"><a href="#blog">blog</a></li>
                                <li class="scroll"><a href="#newsletter">kontak</a></li>
                            </ul><!--/.nav -->
                        </div><!-- /.navbar-collapse -->
                    </div><!--/.container-->
                </nav><!--/nav-->
                <!-- End Navigation -->
            </div><!--/.header-area-->
            <div class="clearfix"></div>
        </div>
        <!-- /.top-area-->
        <!-- top-area End -->

    </header><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--populer-products start -->
    <section id="populer-products" class="populer-products">
        <div class="container">
            <div class="populer-products-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img mt40">
                                <img src="{{ asset('images/populer-products/p1.png') }}"
                                    alt="gambar produk populer">
                            </div>
                            <h2><a href="#">kursi lengan</a></h2>
                            <div class="single-populer-products-para">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-populer-products">
                            <div class="single-inner-populer-products">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="single-inner-populer-product-img">
                                            <img src="{{ asset('images/populer-products/p2.png') }}"
                                                alt="gambar produk populer">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="single-inner-populer-product-txt">
                                            <h2>
                                                <a href="#">
                                                    kursi dan <span>stool</span> dengan desain terbaru
                                                </a>
                                            </h2>
                                            <p>
                                                Edi ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam.
                                            </p>
                                            <div class="populer-products-price">
                                                <h4>Harga Mulai dari <span>Rp.100.000</span></h4>
                                            </div>
                                            <button class="btn-cart welcome-add-cart populer-products-btn"
                                                onclick="window.location.href='#'">
                                                temukan lebih banyak
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="{{ asset('images/populer-products/p3.png') }}"
                                    alt="gambar produk populer">
                            </div>
                            <h2><a href="#">lampu gantung</a></h2>
                            <div class="single-populer-products-para">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section>
    <!--/.populer-products-->
    <!--populer-products end-->

    <!--new-arrivals start -->
    <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Produk Terbaru</h2>
            </div><!--/.section-header-->
            <div class="new-arrivals-content">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals1.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="sale bg-1">
                                    <p>diskon</p>
                                </div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">kursi kayu</a></h4>
                            <p class="arrival-product-price">$65.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals2.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="sale bg-2">
                                    <p>diskon</p>
                                </div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">kursi lengan tunggal</a></h4>
                            <p class="arrival-product-price">$80.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals3.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">kursi lengan kayu</a></h4>
                            <p class="arrival-product-price">$40.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals4.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="sale bg-1">
                                    <p>diskon</p>
                                </div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">kursi bergaya</a></h4>
                            <p class="arrival-product-price">$100.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals5.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">kursi modern</a></h4>
                            <p class="arrival-product-price">$120.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals6.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="sale bg-1">
                                    <p>diskon</p>
                                </div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">meja makan dari kayu maple</a></h4>
                            <p class="arrival-product-price">$140.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals7.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="sale bg-2">
                                    <p>diskon</p>
                                </div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">kursi lengan</a></h4>
                            <p class="arrival-product-price">$90.00</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ asset('images/collection/arrivals8.png') }}" alt="gambar produk terbaru">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">tambahkan <span>ke </span> keranjang</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#">tempat tidur kayu</a></h4>
                            <p class="arrival-product-price">$140.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section>
    <!--/.new-arrivals-->
    <!--new-arrivals end -->

    <!--sofa-collection start -->
    <section id="sofa-collection">
        <div class="owl-carousel owl-theme" id="collection-carousel">
            <div class="sofa-collection collectionbg1">
                <div class="container">
                    <div class="sofa-collection-txt">
                        <h2>unlimited sofa collection</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <div class="sofa-collection-price">
                            <h4>strting from <span>$ 199</span></h4>
                        </div>
                        <button class="btn-cart welcome-add-cart sofa-collection-btn"
                            onclick="window.location.href='#'">
                            view more
                        </button>
                    </div>
                </div>
            </div><!--/.sofa-collection-->
            <div class="sofa-collection collectionbg2">
                <div class="container">
                    <div class="sofa-collection-txt">
                        <h2>unlimited dainning table collection</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <div class="sofa-collection-price">
                            <h4>strting from <span>$ 299</span></h4>
                        </div>
                        <button class="btn-cart welcome-add-cart sofa-collection-btn"
                            onclick="window.location.href='#'">
                            view more
                        </button>
                    </div>
                </div>
            </div><!--/.sofa-collection-->
        </div><!--/.collection-carousel-->

    </section><!--/.sofa-collection-->
    <!--sofa-collection end -->

    <!--feature start -->
    <section id="feature" class="feature">
        <div class="container">
            <div class="section-header">
                <h2>featured products</h2>
            </div><!--/.section-header-->
            <div class="feature-content">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="{{ asset('images/features/f1.jpg') }}" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">designed sofa</a></h3>
                                <h5>$160.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="{{ asset('images/features/f2.jpg') }}" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">dinning table </a></h3>
                                <h5>$200.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="{{ asset('images/features/f3.jpg') }}" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">chair and table</a></h3>
                                <h5>$100.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <img src="{{ asset('images/features/f4.jpg') }}" alt="feature image">
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(45 review)</span>
                                </p>
                                <h3><a href="#">modern arm chair</a></h3>
                                <h5>$299.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.feature-->
    <!--feature end -->

    <!--blog start -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <h2>latest blog</h2>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="{{ asset('images/blog/b1.jpg') }}" alt="blog image">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                                <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="{{ asset('images/blog/b2.jpg') }}" alt="blog image">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                                <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <img src="{{ asset('images/blog/b3.jpg') }}" alt="blog image">
                                <div class="single-blog-img-overlay"></div>
                            </div>
                            <div class="single-blog-txt">
                                <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                                <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end -->

    <!-- clients strat -->
    <section id="clients" class="clients">
        <div class="container">
            <div class="owl-carousel owl-theme" id="client">
                <div class="item">
                    <a href="#">
                        <img src="{{ asset('images/clients/c1.png') }}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{ asset('images/clients/c2.png') }}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{ asset('images/clients/c3.png') }}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{ asset('images/clients/c4.png') }}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{ asset('images/clients/c5.png') }}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
            </div><!--/.owl-carousel-->

        </div><!--/.container-->

    </section><!--/.clients-->
    <!-- clients end -->

    <!--newsletter strat -->
    <section id="newsletter" class="newsletter">
        <div class="container">
            <div class="hm-footer-details">
                <div class="row">
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>information</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">about us</a></li><!--/li-->
                                    <li><a href="#">contact us</a></li><!--/li-->
                                    <li><a href="#">news</a></li><!--/li-->
                                    <li><a href="#">store</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>collections</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">wooden chair</a></li><!--/li-->
                                    <li><a href="#">royal cloth sofa</a></li><!--/li-->
                                    <li><a href="#">accent chair</a></li><!--/li-->
                                    <li><a href="#">bed</a></li><!--/li-->
                                    <li><a href="#">hanging lamp</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>my accounts</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">my account</a></li><!--/li-->
                                    <li><a href="#">wishlist</a></li><!--/li-->
                                    <li><a href="#">Community</a></li><!--/li-->
                                    <li><a href="#">order history</a></li><!--/li-->
                                    <li><a href="#">my cart</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6  col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>newsletter</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-para">
                                <p>
                                    Subscribe to get latest news,update and information.
                                </p>
                            </div><!--/.hm-foot-para-->
                            <div class="hm-foot-email">
                                <div class="foot-email-box">
                                    <input type="text" class="form-control" placeholder="Enter Email Here....">
                                </div><!--/.foot-email-box-->
                                <div class="foot-email-subscribe">
                                    <span><i class="fa fa-location-arrow"></i></span>
                                </div><!--/.foot-email-icon-->
                            </div><!--/.hm-foot-email-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.hm-footer-details-->

        </div><!--/.container-->

    </section><!--/newsletter-->
    <!--newsletter end -->

    <!--footer start-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="hm-footer-copyright text-center">
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                <p>
                    &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
                </p><!--/p-->
            </div><!--/.text-center-->
        </div><!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top"
                    title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div><!--/.scroll-Top-->

    </footer><!--/.footer-->
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="{{ asset('js/jquery.js') }}"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('js/bootsnav.js') }}"></script>

    <!--owl.carousel.js-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    <!--Custom JS-->
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
