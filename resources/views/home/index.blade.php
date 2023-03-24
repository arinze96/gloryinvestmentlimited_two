<!doctype html>
<html class="no-js" lang="en">


<head>
    <title>Gloryinvestmentlimited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Gloryinvestmentlimited</title>
    <link href="{{ asset('front/new/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/new/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/new/assets/css/templatemo-host-cloud.css') }}">
    <link rel="stylesheet" href="{{ asset('front/new/assets/css/owl.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @include('include.home_css')
    <script type="text/javascript">
        var duplicate_google_translate_counter = 0; //this stops google adding button multiple times

        function googleTranslateElementInit() {
            if (duplicate_google_translate_counter == 0) {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
            duplicate_google_translate_counter++;
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script type="text/javascript">
        $(function() {

            $('.dropdown > .caption').on('click', function() {
                $(this).parent().toggleClass('open');
            });

            $('.dropdown > .list > .item').on('click', function() {
                $('.dropdown > .list > .item').removeClass('selected');
                $(this).addClass('selected').parent().parent().removeClass('open').children('.caption')
                    .text($(this).text());
            });

            $(document).on('keyup', function(evt) {
                if ((evt.keyCode || evt.which) === 27) {
                    $('.dropdown').removeClass('open');
                }
            });

            $(document).on('click', function(evt) {
                if ($(evt.target).closest(".dropdown > .caption").length === 0) {
                    $('.dropdown').removeClass('open');
                }
            });

        });
    </script>
</head>

<body>

    <div style="background-color: #c0c0c0;
    position:fixed;
    top:0;
    width:100%;
    z-index:1000000;">
        @include('include.home_header')
    </div>

    {{-- <div class="banner" id="home" style="background-image: url({{ asset('front/img/@33.jpg') }})">
        <div class="hero-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content  wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                            <h3 class="subtitle" style="color: white">let’s us do the work for you</h3>
                            <h1 class="head" style="color: white">Cryptocurrency Investment</h1>
                            <p class="text" style="color: #7cbf42">
                                Take the anxiety out of investing by letting us do the work for you
                            </p>
                            <button type="button" style="width: 60%; margin-top: 30px; background-color: #7cbf42"
                                class="btn btn-secondary btn-lg btn-block">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="page-heading2 header-text">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-6">
                    <div class="banner-content  wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        <h3 class="subtitle" style="color: white">let’s us do the work for you</h3>
                        <h1 class="head" style="color: white">Cryptocurrency Investment</h1>
                        <p class="text" style="color: white">
                            Take the anxiety out of investing by letting us do the work for you
                        </p>
                        <button type="button" style="width: 60%; margin-top: 30px; background-color: #7cbf42"
                            class="btn btn-secondary btn-lg btn-block">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slide position-absolute">
        <div id="google_translate_element"
            style="position:fixed;margin-top:10px; left:20px; bottom: 20px; z-index: 3000px"></div>
    </div>


    <div class="fature" id="howworks">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="section-head">
                        <h4 class="lasthead">How does it work?</h4>
                        <h2 class="title">It's really easy!</h2>
                        <p class="text">
                            It's easier than you think.Follow 3 simple easy steps
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="feature-box">
                        <div class="tumb">
                            <img src="{{ asset('front/img/feature-icon-1.png') }}" alt="">
                        </div>
                        <p class="text">
                            Select a suitable plan
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 text-center wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div class="feature-box">
                        <div class="tumb">
                            <img src="{{ asset('front/img/feature-icon-2.png') }}" alt="">
                        </div>
                        <p class="text">
                            Pass account <br>
                            verification
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="feature-box">
                        <div class="tumb">
                            <img src="{{ asset('front/img/feature-icon-3.png') }}" alt="">
                        </div>
                        <p class="text">
                            Invest funds and <br>
                            withdraw profit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <h1 style="text-align: center">About Us</h1>
            <div class="row">
                <div class="col-md-12">
                    <video style="width: 100%; height: 100%" controls>
                        <source src="{{ asset('front/videos/gil.mp4') }}" type="video/mp4">

                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- platfrom Start -->
    <div class="platfrom" id="about">
        <div class="bg">
            <img src="{{ asset('front/img/front10.jpeg') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 text-center wow fadeInUp" data-wow-duration="0.3s"
                                data-wow-delay="0.3s">
                                <div class="section-head">
                                    <h4 class="lasthead">About us</h4>
                                    <h2 class="title">The Online Financial investment Platform</h2>
                                    <p class="text">
                                        Glory Investment Limited is an instant Financial Investment platform that offers
                                        a wide range of different services, such as Cryptocurrency, Real Estate,
                                        Retirement, among others. Our mission is to offer the public simple and secure
                                        investment with stress-free process which suit each investor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Start -->
    <div class="statistic">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="platfrom-box text-center">
                        <div class="icon">
                            <img src="{{ asset('front/img/offer-icon-1.png') }}" alt="">
                        </div>
                        <p class="text">
                            Extra Fast <br> Transactions
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div class="platfrom-box text-center">
                        <div class="icon">
                            <img src="{{ asset('front/img/offer-icon-2.png') }}" alt="">
                        </div>
                        <p class="text">
                            Secure <br>
                            Transactions
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="platfrom-box text-center">
                        <div class="icon">
                            <img src="{{ asset('front/img/offer-icon-3.png') }}" alt="">
                        </div>
                        <p class="text">
                            24/7 <br>
                            LIVE CHART
                        </p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="content">
                        <div class="bg-pic">
                            <img src="{{ asset('front/img/bg_greven2.png') }}" alt="">
                        </div>
                        <div class="section-head text-center wow fadeInUp" data-wow-duration="0.3s"
                            data-wow-delay="0.2s">
                            <h4 class="lasthead" style="color:#7cc043">Our</h4>
                            <h2 class="title" style="color:#7cc043">Professional Services</h2>
                            <p class="text" style="color:#7cc043">
                                Glory Investment Limited is an instant Financial Investment platform that offers a wide
                                range of different services, such as Cryptocurrency, Real Estate, Retirement, among
                                others. Our mission is to offer the public simple and secure investment with stress-free
                                process which suit each investor.
                            </p>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="0.3s"
                                data-wow-delay="0.3s">
                                <div class="statis-boxx">
                                    <div class="icon">
                                        <img src="{{ asset('front/img/stasictic-icon-1.png') }}" alt="">
                                    </div>
                                    <div class="statis-content">
                                        <h3 class="subtitle">Business Consulting</h3>
                                        <p class="text">
                                            At Gloryinvesmentlimited we are on daily standby for Business Consulting,
                                            and
                                            strategic development endeaours. We are alway
                                            available 24/7

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="0.4s"
                                data-wow-delay="0.4s">
                                <div class="statis-boxx">
                                    <div class="icon">
                                        <img src="{{ asset('front/img/stasictic-icon-2.png') }}" alt="">
                                    </div>
                                    <div class="statis-content">
                                        <h3 class="subtitle">Financial Data Analysis</h3>
                                        <p class="text">
                                            Our experts at Gloryinvesmentlimited make proper market analysis before
                                            investing
                                            funds. Our Culture of proper financial analysis has made us a market leader
                                            in investing
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="0.5s"
                                data-wow-delay="0.5s">
                                <div class="statis-boxx">
                                    <div class="icon">
                                        <img src="{{ asset('front/img/stasictic-icon-3.png') }}" alt="">
                                    </div>
                                    <div class="statis-content">
                                        <h3 class="subtitle">Children Account Investment</h3>
                                        <p class="text">
                                            Our team of Experts are successful investment fund managers on the best
                                            financial investment for your kids future</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="0.3s"
                                data-wow-delay="0.3s">
                                <div class="statis-boxx">
                                    <div class="icon">
                                        <img src="{{ asset('front/img/stasictic-icon-1.png') }}" alt="">
                                    </div>
                                    <div class="statis-content">
                                        <h3 class="subtitle">Cryptocurrency Investment</h3>
                                        <p class="text">
                                            We help you invest funds in the best crypto asset for a maximum return, we
                                            have maintained a leading
                                            position in the field of crypto investment
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="0.4s"
                                data-wow-delay="0.4s">
                                <div class="statis-boxx">
                                    <div class="icon">
                                        <img src="{{ asset('front/img/stasictic-icon-2.png') }}" alt="">
                                    </div>
                                    <div class="statis-content">
                                        <h3 class="subtitle">Global Charity Donations</h3>
                                        <p class="text">
                                            We raise funds for humanitarian purposes which is mainly focused
                                            on help the less priviledged in the third world countries
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="0.5s"
                                data-wow-delay="0.5s">
                                <div class="statis-boxx">
                                    <div class="icon">
                                        <img src="{{ asset('front/img/stasictic-icon-3.png') }}" alt="">
                                    </div>
                                    <div class="statis-content">
                                        <h3 class="subtitle">Retirement Fund Investment</h3>
                                        <p class="text">
                                            Our team of financial experts advices help advise you
                                            on how to manage your portfolio and invest in a high return market for a
                                            better future
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="0.5s"
                                data-wow-delay="0.5s">
                                <div class="statis-boxx">
                                    <div class="icon">
                                        <img src="{{ asset('front/img/stasictic-icon-3.png') }}" alt="">
                                    </div>
                                    <div class="statis-content">
                                        <h3 class="subtitle">NFP Investment</h3>
                                        <p class="text">
                                            We help you invest in the US employment market, providing one of the biggest
                                            returns in history of investment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="content">
                        <div class="bg-pic">
                            <img src="{{ asset('front/img/bg_greven2.png') }}" alt="">
                        </div>
                        <div class="section-head text-center wow fadeInUp" data-wow-duration="0.3s"
                            data-wow-delay="0.2s">
                            <h4 class="lasthead" style="color:#7cc043">SMART INVESTMENT AT YOUR DOORSTEP.</h4>
                            <h2 class="title" style="color:#7cc043">GLORY INVESTMENT LIMITED</h2>
                            <p class="text" style="color:#7cc043">
                                CREATING A FINANCIAL STABLE AND VIBRANT WORLD THROUGH EXCELLENT INVESTMENT.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="{{ asset('front/img/Group-39.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-content">
                                <div class="section-heading">
                                    <h1>The Insight story</h1>
                                    <p>
                                        By the end of 2016, more than 700 digital currencies were introduced and
                                        co-existed. Bearing that in mind, it came as no surprise that during 2017 the
                                        total trading volume of the digital currency market has reached a very high
                                        value. This phenomenal sum is even more astonishing when considering the simple
                                        fact that this market started only 8 years before. A big advantage of digital
                                        currencies is that they are not tied to a specific country or bank, therefore
                                        allowing them to be liquid not only during traditional trading hours, but also
                                        throughout weekend and holidays, allowing people to trade on them 24/7*. The
                                        digital currency market is highly volatile and experiencing drastic trends.
                                        Compared to other financial assets, cryptocurrency trading has very little
                                        barrier to entry, offers arbitrage and margin trading, and therefore, many
                                        people can potentially benefit from it. Get instant access to the most popular
                                        cryptocurrencies available directly on our trading platform. Trade the hottest
                                        financial market instruments, offered by GLORYINVESTMENTLIMITED
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scurity Start -->
    <div class="scurity">
        <div class="icon-one">
            <img src="{{ asset('front/img/scurity-vector-1.png') }}" alt="">
        </div>
        <div class="icon-two">
            <img src="assets/img/scurity-vector-2.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.2s">
                    <div class="section-head">
                        <h4 class="lasthead">Our Team</h4>
                        <h2 class="title">Executives at GloryInvestmentLimited</h2>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="row justify-content-center" style="justify-content: space-between">
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #e6f2ff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team7.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Franklin Nussbaum Staff
                            Manager Investment</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #e6f2ff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team2.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Aamos Sutinen IT expert
                            and specialist</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #e6f2ff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team3.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Naome Balogh Staff Manager
                            Investment</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #e6f2ff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team4.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Jasmine Bradshaw
                            administrator and Staff manager investment</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #e6f2ff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team5.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Stephanie Morales Chief
                            executive officer and president</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #e6f2ff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team6.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Brandon Warren Owner and
                            Major Stakeholder</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #e6f2ff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team1.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Russell Mellon Excecutive
                            vice president.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- testomonial Start -->
    <section class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="section-head">
                        <h4 class="lasthead">Testimonials</h4>
                        <h2 class="title">Don’t just take our word for it!</h2>
                        <p class="text">
                            Join the fastest growing investment company round the globe. Trusted and certified in over
                            120 countries.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.5s">
                    <div class="about-testimonial">
                        <img src="{{ asset('front/img/world-map.png') }}" alt="">
                        <div class="client one">
                            <div class="img one" style="background-image: url({{ asset('front/img/testi1.png') }})">
                                <div id="myPopover" class="popover popover-default mypopover">
                                    <div class="client-review">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="bottom-text">“This platform will save you the stress of
                                            cryptocurrency speculations and will make you money at the end”</p>
                                        <div class="client-info">
                                            <h4 class="name">Dante Dilliane</h4>
                                            <p class="position">Liverpool UK</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client two">
                            <div class="img two" style="background-image: url({{ asset('front/img/old_M.jpeg') }})">
                                <div id="myPopover2" class="popover popover-default mypopover">
                                    <div class="client-review">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="bottom-text">“i encourage you to invest in this platform, i did since
                                            last year, since then i never had to work two jobs”</p>
                                        <div class="client-info">
                                            <h4 class="name">Oliver Dillone</h4>
                                            <p class="position">Madrid Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="client three">
                            <div class="img three"
                                style="background-image: url({{ asset('front/img/testi3.png') }})">
                                <div id="myPopover3" class="popover popover-default mypopover">
                                    <div class="client-review">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="bottom-text">“Sometimes i feel like everybody should know about the
                                            opportunities this platform offers so as to better their lives”</p>
                                        <div class="client-info">
                                            <h4 class="name">Jessica Nortbure</h4>
                                            <p class="position">Atlanta Georgia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client four">
                            <div class="img four" style="background-image: url({{ asset('front/img/old_W.jpeg') }})">
                                <div id="myPopover4" class="popover popover-default mypopover">
                                    <div class="client-review">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="bottom-text">“No doubt, this platform is recommended by me”</p>
                                        <div class="client-info">
                                            <h4 class="name">Janet Crowell</h4>
                                            <p class="position">Brussles Belgium</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client five">
                            <div class="img five" style="background-image: url({{ asset('front/img/testi5.png') }})">
                                <div id="myPopover5" class="popover popover-default mypopover">
                                    <div class="client-review">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="bottom-text">“I beleive that gloryinvestment limited is aplatform
                                            that can help you grow financially”</p>
                                        <div class="client-info">
                                            <h4 class="name">Flora Bentiaga</h4>
                                            <p class="position">Houston Texas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client six">
                            <div class="img six" style="background-image: url({{ asset('front/img/testi6.png') }})">
                                <div id="myPopover6" class="popover popover-default mypopover">
                                    <div class="client-review">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="bottom-text">“I was skrptical the first time, but ever since i
                                            withdrew my first $10,000 profit i am now a messenger of the platform.”</p>
                                        <div class="client-info">
                                            <h4 class="name">Flora Oliver</h4>
                                            <p class="position">Columbus Ohio</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    @include('include.home_footer')

    {{-- <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div> --}}

    @include('include.home_js')
</body>


</html>
