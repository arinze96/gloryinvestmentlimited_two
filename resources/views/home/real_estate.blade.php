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

    <div style="background-color: #c0c0c0;
    position:fixed;
    top:0;
    width:100%;
    z-index:1000000;">
        @include('include.home_header')
    </div>

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Real Estate</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span>Real Estate</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/rel1.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            {{-- <h2>Background of our company</h2> --}}
                            <p>Our experienced real estate team pinpoints properties with the highest potential.
                            </p>
                            <br>
                            <p>
                                We purchase, renovate and manage apartment buildings across the country the fund
                                renovates the units to increase the cash flow. This immediately increases the building’s
                                value as well as the rents.
                            </p>
                            <br>
                            <p>
                                Cash flow from rents is reinvested throughout the fund’s term to continue adding new
                                properties and funding renovations. Since all properties are cash flowing, we wait and
                                let the assets further appreciate so we can sell them at a maximum profit.
                            </p>
                            <br>
                            <p>
                                The risk of a sharp decline in the investment value of assets.When the market is right,
                                we sell the assets and redistribute profits among investors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <p>
                                From the moment you invest, your dollars are hard at work. When you invest with
                                Gloryinvesmentlimited, you are investing with a partner, not just a broker. Other broker
                                platforms charge you unnecessary middleman fees. Our key differentiator is that we are a
                                sponsor-direct platform. This means we own and manage all of our own assets. Your
                                investment is managed by us and your return will come under our ownership alone,
                                removing several layers of third-parties and their fees. We provide value by
                                strategizing and leveraging industry knowledge to maximize your return. Our team is
                                involved throughout the whole investment lifecycle to ensure you are provided the
                                managed investment you hoped for. We provide decades of successful real estate investing
                                experience while we pursue the best results for our invests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/rel34.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/rel3.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <p>
                                The Gloryinvestmentlimited Growth REIT is designed to be a long-­term investment and is
                                inherently liquid in nature. It has a 2-year projected term. We aim to invest in
                                projects that can be sold within approximately two years. We maintain several
                                cash-flowing properties in the portfolio, generating revenue from rents. When market
                                conditions are suitable for an advantageous liquidation event, we sell the assets at
                                which point investors will receive their principal and returns back. Our team shares the
                                same vision and we have the experience. We have the team, the platform and the
                                technology to make it happen and nothing’s going to stop us from bringing
                                wealth-building opportunities to the everyday investor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Ends Here -->
    



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
