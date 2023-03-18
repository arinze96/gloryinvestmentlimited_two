<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Gloryinvestmentlimited</title>
    <!-- Bootstrap core CSS -->
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
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    @include('include.home_header')


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="page-heading2 header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #7cc043">What we Offer</h1>
                    <p style="color: #fff"><a href="{{ route('app.home') }}">Home</a> / <span>What We Offer</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Trusted Starts Here -->
    <div class="trusted-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="trusted-section-heading">
                        <h4>TRUSTED BY 120,250+ HAPPY CUSTOMERS WORLDWIDE</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-trusted owl-carousel">
                        <div class="trusted-item">
                            <img src="assets/images/trusted-01.png" alt="trusted 1">
                        </div>
                        <div class="trusted-item">
                            <img src="assets/images/trusted-01.png" alt="trusted 2">
                        </div>
                        <div class="trusted-item">
                            <img src="assets/images/trusted-01.png" alt="trusted 3">
                        </div>
                        <div class="trusted-item">
                            <img src="assets/images/trusted-01.png" alt="trusted 4">
                        </div>
                        <div class="trusted-item">
                            <img src="assets/images/trusted-01.png" alt="trusted 5">
                        </div>
                        <div class="trusted-item">
                            <img src="assets/images/trusted-01.png" alt="trusted 6">
                        </div>
                        <div class="trusted-item">
                            <img src="assets/images/trusted-01.png" alt="trusted 7">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted Ends Here -->


    <div class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Management</span>
                        <h2>Portfolio Management</h2>
                        <p>
                            Gloryinvesmentlimited believes portfolio management is far more than just buying stocks and bonds
                            and hoping they do well. We use a tested “top-down” investment approach combined with
                            personalized planning to build a portfolio tailored to your long-term financial goals. Our
                            proven approach has attracted a global base of over 900 million individual and institutional
                            clients.
                        </p>
                        <br>
                        <p>
                            We want to improve the financial well-being of our clients, beyond just recommending an
                            investment strategy. We stay in touch as your needs evolve and market conditions shift. We
                            help you meet your longer-term goals with an investment strategy that’s specifically
                            designed for you. And we’re transparent about the investing decisions we make for you
                            because we believe an informed investor is a better investor and a happier client.
                        </p>
                        <br>
                        <p>
                            Much like a tailor who alters the hem, sleeves, and collar of a suit to fit an individual's
                            proportions, we take a variety of factors into account to create a portfolio tailored to
                            your needs. Some of the factors we may consider when choosing the optimal long-term
                            investment strategy and near-term portfolio tactics include: investment Goals, Tax
                            consideration and Income needs. Our dedicated Portfolio Evaluation Group, under the guidance
                            of our Investment Policy Committee, will use this information to provide you with a written
                            personalized portfolio analysis and investment strategy recommendation. As your
                            circumstances change, your portfolio needs may too. Your personal Investment Counselor will
                            regularly review your individual situation with you and keep you abreast of our views on
                            capital markets and important developments related to your portfolio.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Planning</span>
                        <h2>Financial Planning</h2>
                        <p>
                            We can help you prepare for the future with a financial plan designed especially for you. A
                            good financial plan is a blueprint that lets you save, spend, invest, manage risk and
                            approach tax and estate planning with confidence.
                        </p>
                        <span style="margin-top: 20px; margin-bottom: 20px">ASSESSING YOUR FINANCIAL PLANS</span>
                        <br>
                        <p>
                            Does your financial plan provide an investment strategy to help you reach your financial
                            goals and objectives?
                        </p>
                        <br>
                        <p>
                            The overall success of your financial plan is partly dependent on an appropriate investment
                            recommendation, based on your long-term financial goals and objectives. At Gloryinvestmentlimited,
                            we take into account everything from your family health history to the specific stocks,
                            bonds or other investments in your portfolio to help build an in-depth understanding of the
                            objectives for your assets. Using tools like portfolio simulations and historical modeling,
                            we can provide an investment recommendation we believe is most likely to help you reach your
                            goals. This recommendation provides the foundation for your future financial success, and
                            may help you avoid running out of money in retirement.
                        </p>
                        <br>
                        <p>
                            Is your financial plan helping to ensure you leave the legacy you want?
                        </p>
                        <br>
                        <p>
                            Many investors find their investment time horizon may last beyond their lifetime, giving
                            them the opportunity to use their assets to support someone or something important to them.
                            While supplementary to an appropriate investment recommendation, planning for and protecting
                            the future of your wealth are common needs that can be complicated to address. At
                            Gloryinvesmentlimited, we can provide perspective on tactics and resources available to help ensure
                            what you want to happen, does.
                        </p>
                        <br>
                        <p>
                            Does your financial plan provide perspective on financial planning topics such as Social
                            Security, taxes and insurance?
                        </p>
                        <br>
                        <p>
                            Many investors want to feel they are making informed and prudent decisions about all aspects
                            of their wealth, not just their investment strategy and legacy. Understanding the
                            relationship between taxes, cash flow requirements, and Social Security benefits may
                            influence how you meet your living expenses both before and after retirement. Additionally,
                            recognizing the connection between your investments and insurance needs (e.g. health, long
                            term care, and annuities) may help you decide whether purchasing coverage is appropriate.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <i class="fa fa-university"></i>
                        <h4>Business Consulting</h4>
                        <p>At Gloryinvesmentlimited we are on daily standby for Business Consulting, and strategic development
                            endeaours. We are alway available 24/7</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <i class="fa fa-university"></i>
                        <h4>Financial Data Analysis</h4>
                        <p>Our experts at Gloryinvesmentlimited make proper market analysis before investing funds. Our Culture
                            of proper financial analysis has made us a market leader in investing</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <i class="fa fa-university"></i>
                        <h4>Children Account Investment</h4>
                        <p>Our team of Experts are successful investment fund managers on the best financial investment
                            for your kids future
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <i class="fa fa-university"></i>
                        <h4>Cryptocurrency Investment</h4>
                        <p>We help you invest funds in the best crypto asset for a maximum return, we have maintained a
                            leading position in the field of crypto investment
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <i class="fa fa-university"></i>
                        <h4>Global Charity Donations</h4>
                        <p>We raise funds for humanitarian purposes which is mainly focused on help the less priviledged
                            in the third world countries
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <i class="fa fa-university"></i>
                        <h4>Retirement Fund Investment
                        </h4>
                        <p>Our team of financial experts advices help advise you on how to manage your portfolio and
                            invest in a high return market for a better future
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    <!-- Pricing Ends Here -->


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
