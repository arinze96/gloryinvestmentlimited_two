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
    <div style="background-color: #c0c0c0;
    position:fixed;
    top:0;
    width:100%;
    z-index:1000000;">
        @include('include.home_header')
    </div>

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
                    <h1>Meet Our Team</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span>Meet Our Team</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Heading Ends Here -->



    <!-- Team Starts Here -->
    <div class="scurity" style="margin-bottom: 50px">
        {{-- <div class="icon-one">
            <img src="{{ asset('front/img/scurity-vector-1.png') }}" alt="">
        </div> --}}
        {{-- <div class="icon-two">
            <img src="assets/img/scurity-vector-2.png" alt="">
        </div> --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="section-head">
                        <h4 class="lasthead">Our Team</h4>
                        <h3 class="title">Group Corporate Overview</h3>
                        <p style="text-align: left; line-spacing: 40px">
                            Brandon Warren has over 35 years of experience in the banking industry. The cryptocurrency
                            enthusiast is now leveraging his extensive experience and love for cryptography to connect
                            the world and offer everyone a chance to generate a stable alternative income. Marcia
                            Patricia grew up in very poor conditions. However, he is very ambitious and had intended
                            since childhood, to help his family attain financial freedom. his older brother noticed
                            young Brandon Warren’s ambition early enough and supported his financially by working on
                            construction sites. Their sibling sacrifice helped Brandon Warren put all his effort into
                            education and made his hungrier for success and dedicated to the cause of uplifting his
                            family! Brandon Warren graduated from the university and started working in the banking
                            industry as an asset management executive. While there, he met his colleague Lambert
                            Frescobaldi.
                        </p>
                        <br>
                        <p style="text-align: left; line-spacing: 40px">
                            From the beginning, both got along well, even becoming great friends, However,
                            Brandon Warren was not quite fulfilled with his position in the bank. he realized, rather
                            disappointedly, that banks cared more about their bottom line than their customers’
                            sustenance and progress. Moreover, the banks’ operations heaped a load of inconveniences on
                            their customers; the ever-decreasing interests due to annual inflations, zero anonymity, and
                            exclusion of certain sections of the society, all irked Brandon Warren. The outlined
                            frustration fuelled an idea that shall soon change the world! Brandon Warren’s idea, the
                            push behind Gloryinvestmentslimited, Trading and Investments, is giving everyone the means
                            to
                            generate enough passive income to subsist on. The idea, however, has thrust Brandon Warren
                            on a collision course with the banks; one that demanded he gets assistance before
                            proceeding. he asked his old friend Lambert Frescobaldi to help his found an equalized
                            financial system, the opposing force that offers the solutions to fight the banks’ elfish
                            regimes. Lambert Frescobaldi quickly recognized the potential of the idea and its many
                            benefits and agreed to join Brandon Warren. Both retired from the bank towards the end of
                            2014 and started working on Gloryinvestmentslimited, Trading and Investments. Their vision
                            is to
                            change the world. A vision to offer people equal earning possibilities. To provide an
                            opportunity for people to simply earn money without much effort. Their vision sees everybody
                            – a family like Brandon Warren’s included, having the opportunity to afford the luxury.
                            There is the vision that drives Gloryinvestmentslimited, Trading and Investments!
                        </p>
                        <h3 class="title">Brandon Warren</h3>
                        <p>CEO Gloryinvestmentlimited</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="row justify-content-center" style="justify-content: space-between">
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #fff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team7.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Franklin Nussbaum Staff
                            Manager Investment</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #fff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team2.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Aamos Sutinen IT expert
                            and specialist</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #fff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team3.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Naome Balogh Staff Manager
                            Investment</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #fff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team4.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Jasmine Bradshaw
                            administrator and Staff manager investment</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #fff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team5.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Stephanie Morales Chief
                            executive officer and president</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #fff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team6.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Brandon Warren Owner and
                            Major Stakeholder</p>
                    </div>
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" style="border: 2px #fff solid; margin-bottom: 20px"
                        data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('front/img/team1.jpeg') }}" alt="">
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 20px">Russell Mellon Excecutive
                            vice president.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Team Ends Here -->



    @include('include.home_footer')

    <script src="{{ asset('new/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('new/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

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
