<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <title>Gloryinvestmentlimited</title>

    <link href="{{ asset('front/new/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/new/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/new/assets/css/templatemo-host-cloud.css') }}">
    <link rel="stylesheet" href="{{ asset('front/new/assets/css/owl.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @include('include.home_css')

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

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   --}}
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('include.home_header')

    {{-- <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Host <em>Cloud</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Login</a></li>
              <li class="nav-item">
               
              </li>
            </ul>
          </div>
          <div class="functional-buttons">
            <ul>
              <li><a href="#">Sign Up</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header> --}}

    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span>About Us</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- About Us Starts Here -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/abt.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <span>About Us</span>
                            {{-- <h2>Background of our company</h2> --}}
                            <p>Gloryinvestmentlimited, Trading and Investments is a UK-based investment manager with
                                offices in
                                USA, Ukraine and Russia. We are a dynamic group whose main focus is to provide our
                                clients with the best possible service, We apply a systematic and quantitative approach
                                to investment management, with the aim of generating high-quality and diversifying alpha
                                for its clients’ portfolios. We regularly update our platforms with the latest trading
                                and analysis tools and continually add new learning resources to the Education Center.
                                We’re also committed to reducing your investment costs and offering low cost fixed
                                spreads on all assets. We guarantee that you’ll never be surprised by any commissions,
                                hidden charges or other fees.

                                The company offers long term and short term investment opportunities,
                                Gloryinvestmentlimited,
                                Trading and Investments was established in 2002 and it initially began trading stocks,
                                shares and bonds, it got involved in forex trading in 2008 and was among the pioneer
                                traders of Crypto-currencies in the advent of Bitcoin in 2010. Bainvest Consulting,
                                Trading and Investments is currently managed by a senior team which has extensive
                                experience in the development and implementation of systematic investment strategies.
                                Gloryinvestmentlimited, Trading and Investments directors, together with the company’s
                                employees
                                and Employee Benefit Trust, currently own approximately 98% of the company. Aspect
                                employs a team of over 130 professionals and invests heavily in the on-going
                                research-driven evolution of its quantitative alpha-generating systems and their
                                efficient implementation across a wide range of liquid asset classes. The company
                                emphasises strong corporate governance and the provision of first class investor service
                                to a client base which includes many of the world’s leading institutional investors.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Ends Here -->


    <!-- Team Starts Here -->
    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading">
                        <span>Our Team</span>
                        <h2>Meet the greatest people</h2>
                        <p>Integer blandit, tellus varius vulputate cursus, purus orci tincidunt tortor, eget tincidunt
                            elit justo non leo. Donec mollis nulla id est suscipit, ut laoreet nibh faucibus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="team-item">
                        <img src="{{ asset('front/new/assets/images/team-01.jpg') }}" alt="">
                        <div class="down-content">
                            <h4>Jonathan Smart</h4>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="team-item">
                        <img src="{{ asset('front/new/assets/images/team-02.jpg') }}" alt="">
                        <div class="down-content">
                            <h4>Mary Morris</h4>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="team-item">
                        <img src="{{ asset('front/new/assets/images/team-03.jpg') }}" alt="">
                        <div class="down-content">
                            <h4>George White</h4>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ends Here -->


    <!-- Testimonials Starts Here -->
    <<div class="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Testimonials</span>
                        <h2>What they say about us</h2>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <div class="owl-testimonials owl-carousel">
                        <div class="testimonial-item">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>"Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat,
                                rutrum ut malesuada."</p>
                            <h4>William Smith</h4>
                            <span>New Co-Founder</span>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>"Quisque lacinia sed velit et maximus. Quisque dictum, lacus a malesuada finibus, arcu
                                magna luctus risus, eu accumsan risus elit vitae lacus."</p>
                            <h4>Vinny Smart</h4>
                            <span>Digital Marketer</span>
                        </div>
                        <div class="testimonial-item">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>"Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui. Aenean
                                molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor
                                nunc aliquet felis."</p>
                            <h4>Trevor Liam</h4>
                            <span>Technology Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Testimonials Ends Here -->


        <!-- Footer Starts Here -->
        @include('include.home_footer')
        <!-- Footer Ends Here -->

        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('new/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('new/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Additional Scripts -->
        <script src="{{ asset('front/new/assets/js/custom.js') }}"></script>
        <script src="{{ asset('front/new/assets/js/owl.js') }}"></script>
        <script src="{{ asset('front/new/assets/js/accordions.js') }}"></script>
        @include('include.home_js')

        <script language="text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t) { //declaring the array outside of the
                if (!cleared[t.id]) { // function makes it static and global
                    cleared[t.id] = 1; // you could use true and false, but that's more typing
                    t.value = ''; // with more chance of typos
                    t.style.color = '#fff';
                }
            }
        </script>

</body>

</html>
