<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <section class="client_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Testimonial
                    </h2>
                </div>
            </div>
            <div class="container px-0">
                <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="client_info">
                                    <div class="client_name">
                                        <h5>
                                            Dawit
                                        </h5>
                                        <h6>
                                            Loyal Customer </h6>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    "I have been a regular customer for over a year now, and I am always impressed with the quality of the products and the exceptional customer service. The gifts I’ve purchased here never fail to delight my loved ones. Highly recommend this shop!"
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="client_info">
                                    <div class="client_name">
                                        <h5>
                                            Mariamawit
                                        </h5>
                                        <h6>
                                            Happy Shopper
                                        </h6>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    "I couldn’t be happier with my experience! The selection of gifts is incredible, and the delivery was so fast. It’s my go-to place for unique and thoughtful presents. Thank you for making gift-giving so easy!"
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="client_info">
                                    <div class="client_name">
                                        <h5>
                                            Paulos
                                        </h5>
                                        <h6>
                                            First-Time Buyer
                                        </h6>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    "This was my first time ordering from this shop, and I’m genuinely impressed. The website is easy to navigate, the product quality is outstanding, and the packaging was so beautiful. Definitely coming back for more!"
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_btn-box">
                        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end hero area -->
    <!-- info section -->
    @include('home.footer')
</body>

</html>