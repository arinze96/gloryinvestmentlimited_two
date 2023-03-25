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
                                traders of Crypto-currencies in the advent of Bitcoin in 2010. Gloryinvestmentslimited,
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
