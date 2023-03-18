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

    @include('include.home_header')

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
                            <h2>ABOUT NFP (NON FARM PAYROLL) </h2>
                            <p>NFP (Non-Farm Payrolls) is an essential pointer of the current economic state. It
                                includes the data regarding the number of jobs added, government employees, excluding
                                farm employees, private household employees, and employees of non-profit organizations.
                            </p>
                            <h2>HOW DOES NFP AFFECT FOREX? </h2>
                            <br>
                            <p>
                                NFP (Non-Farm Payrolls) is data released by the Bureau of Labor Statistics every year.
                                For the Federal Reserve Bank, employment is a huge factor to consider. For example,
                                employment is a crucial metric to consider.When employment is high and in a good state,
                                policymakers create an expansionary monetary policy with low-interest rates. If it is
                                higher than usual, it is anticipated that the economy is running slow, and policymakers
                                will try to increase it. Such a stimulatory policy comes with low-interest rates and
                                decreases the demand for the Dollar.
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
                            <p>US Dollar (EUR/USD, AUD/USD, USD/JPY, USD/CHF, GBP/USD, and others) are most affected by the NFP release. There are other pairs as well that may be affected.
                            </p>
                            <br>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <h2>STRATEGY USED BY Gloryinvestmentlimited FOR NFP? </h2>
                            <p>
                                Gloryinvestmentlimited employs different strategies to ensure the massive return from the NFP market just like the signals they have been providing lately. The strategy used by Gloryinvestmentlimited expert traders involves waiting for a small consolidation, the inside bar, after the initial volatility of the report has subsided and the market is choosing which direction it will go. By controlling risk with a moderate stop, we are poised to make a potentially large profit from a huge move that almost always occurs each time the NFP is released.
                            </p>
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
