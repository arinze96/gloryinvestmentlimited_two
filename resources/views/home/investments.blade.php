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

    <div class="pricing-section">
        <div class="background-image-pricing">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading">
                        <h2>Investment Plans</h2>
                        <p>These plan helps you structure how much cash, stock, bonds, and real estate to invest in to
                            your retirement funds

                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <h4>Tier 1</h4>
                        <div class="price">
                            <h6>$100.00</h6>
                            <span>monthly</span>
                        </div>
                        <div class="dev"></div>
                        <ul>
                            <li style="text-align: center">Maximum amount: $9,999</li>
                            <li style="text-align: center">Weekly ROI: 2.5%</li>
                            <li style="text-align: center">Duration: 52 weeks</li>
                            <li style="text-align: center">Referral Commission: 10%</li>
                            <li style="text-align: center">Security Management</li>
                            <li style="text-align: center">24/7 Support</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="main-button">Get started</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <h4>Tier 2</h4>
                        <div class="price price-gradient">
                            <h6>$10,000</h6>
                            <span>monthly</span>
                        </div>
                        <div class="dev"></div>
                        <ul>
                            <li style="text-align: center">Maximum amount: $99,999</li>
                            <li style="text-align: center">Weekly ROI: 3%</li>
                            <li style="text-align: center">Duration: 52 weeks</li>
                            <li style="text-align: center">Referral Commission: 10%</li>
                            <li style="text-align: center">Security Management</li>
                            <li style="text-align: center">24/7 Support</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="main-button">Get started</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <h4>Tier 3</h4>
                        <div class="price">
                            <h6>$100,000</h6>
                            <span>monthly</span>
                        </div>
                        <div class="dev"></div>
                        <ul>
                            <li style="text-align: center">Maximum amount: $499,999</li>
                            <li style="text-align: center">Weekly ROI: 3.5%</li>
                            <li style="text-align: center">Duration: 52 weeks</li>
                            <li style="text-align: center">Referral Commission: 15%</li>
                            <li style="text-align: center">Security Management</li>
                            <li style="text-align: center">24/7 Support</li>
                        </ul>
                        <a href="{{ route('user.login') }}" class="main-button">Get started</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <h4>Tier 4</h4>
                        <div class="price price-gradient">
                            <h6>$500,000</h6>
                            <span>monthly</span>
                        </div>
                        <div class="dev"></div>
                        <ul>
                            <li style="text-align: center">Maximum amount: $1,000,000</li>
                            <li style="text-align: center">Weekly ROI: 4%</li>
                            <li style="text-align: center">Duration: 52 weeks</li>
                            <li style="text-align: center">Referral Commission: 15%</li>
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
