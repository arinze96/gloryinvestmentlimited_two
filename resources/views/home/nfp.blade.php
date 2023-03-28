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

    <div class="page-heading1 header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color:#7cbf42">Non Farm Payroll</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span style="color:#fff">NFP INVESTMENTS</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/nfp_bg2.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <h2>WHAT IS NON-FARM PAYROLL?</h2>
                            <p>NFP (Non-Farm Payrolls) is an essential pointer of the current economic state. It
                                includes the data regarding the number of jobs added, government employees, excluding
                                farm employees, private household employees, and employees of non-profit organizations.
                            </p>
                            <p>The NFP is a monthly report that estimates the net number of jobs gained in the US in the
                                previous month, excluding those in farms, private households, and non-profit
                                organizations. It is usually released on the first Friday of the month, in an Employment
                                Situation report that also includes the US unemployment rate, average hourly earnings,
                                and participation rate.</p>
                            <h2>HOW DOES NFP AFFECT FOREX? </h2>
                            <br>
                            <p>
                                NFP releases have a general tendency to cause large movements in the forex market. If
                                the Fed decides to lower interest rates to combat high unemployment, it reduces demand
                                for the dollar, causing it’s the dollar’s price to fall. Conversely, a high number of
                                additional jobs (generally, anything in six figures, but particularly 200,000 or more)
                                is likely to be a positive factor in terms of pushing USD gains. A particularly positive
                                forecast ahead of an NFP release can have the same effect as would NFP data which
                                radically outperforms estimates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="about-us"> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="right-content">
                    <div class="section-heading">
                        <h2>CURRENCY PAIRS MOST AFFECTED BY NFP </h2>
                        <p>US Dollar (EUR/USD, AUD/USD, USD/JPY, USD/CHF, GBP/USD, and others) are most affected by the
                            NFP release. There are other pairs as well that may be affected.
                        </p>
                        <br>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <div class="section-heading">
                        <h2>TWO WAYS TO TRADE NFP </h2>
                        <br>
                        <p>Before the release:</p>
                        <br>
                        <p>
                            If you place a trade before the figure is revealed, you are using your skills of deductive
                            reasoning to predict which way the market will go before it actually does. Risk management
                            is vital to using this type of strategy as an unexpected figure can create gaps in the
                            market that could theoretically jump right over any risk-minimizing stops you have in place.
                            Therefore, it is wise to give whatever instrument you choose to trade wide breadth to move
                            and oscillate to give yourself a better chance. Most of the central banks around the world
                            would like inflation to grow at an annual basis of around 2% to 3%.
                        </p>
                        <br>
                        <p>After the release:</p>
                        <br>
                        <p>Trading after the release is a little more cautious, but also comes with its own set of
                            risks. The initial knee-jerk reaction to the NFP headline isn’t always the “end-all, be-all”
                            of market movement for the day. It has been well documented that markets can mimic a V-shape
                            post NFP, where the spike goes in one direction then reverses in the minutes or hours
                            afterward.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>

    <div class="pricing-section">
        <div class="background-image-pricing">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading">
                        <h2>NFP Plans</h2>
                        <p>These plan helps you structure how much cash, stock, bonds, and real estate to invest in to
                            your NFP funds

                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <h4>Tier 1</h4>
                        <div class="price">
                            <h6>$40,000.00</h6>
                            <span>monthly</span>
                        </div>
                        <div class="dev"></div>
                        <ul>
                            <li style="text-align: center">Maximum amount: $40,000</li>
                            <li style="text-align: center">Daily ROI: 40%</li>
                            <li style="text-align: center">Duration: 24 hrs</li>
                            <li style="text-align: center">Referral Commission: 10%</li>
                            <li style="text-align: center">Security Management</li>
                            <li style="text-align: center">24/7 Support</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="main-button">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
