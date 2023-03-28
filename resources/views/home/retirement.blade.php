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
                    <h1>Retirement Funds</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span>Retirement Funds</span></p>
                </div>
            </div>
        </div>
    </div>




    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/ca1.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <p>
                                Retirement planning means preparing today for your future life so that you continue to
                                meet all your goals and dreams independently. This includes setting your retirement
                                goals, estimating the amount of money you will need, and investing to grow your
                                retirement savings.
                            </p>
                            <br>
                            <p>
                                Every retirement plan is unique. After all, you may have very specific ideas on how you
                                want to spend your retired life. This is why it’s important to have a plan that is
                                designed specifically to suit your individual needs.
                            </p>
                            <br>
                            <p>
                                You retire from work, not life. You may have a new set of dreams for your
                                post-retirement life. At the same time, you may also want to maintain your day-to-day
                                lifestyle without worrying about expenses.
                            </p>
                            <br>
                            <p>
                                By planning in advance, you can define the path to achieve these life goals without any
                                financial dependence.
                            </p>
                            <br>
                            <p>
                                On the surface, retirement planning hasn’t changed all that much over the years. You
                                work, you save and then you retire. But while the mechanics may be the same, today’s
                                savers are facing some challenges that previous generations didn’t have to worry about.
                                First of all, life expectancy is longer, which means you’ll need your money to last
                                longer – potentially into your 90s. Bond yields are also much lower than they used to
                                be, which means you can’t buy a few fixed income instruments and earn a double-digit
                                return. Then there is the health crisis due to the covid
                                This is compounded by the fact that more companies are moving away from defined benefit
                                pensions —which guaranteed you a certain amount of money in your golden years — to
                                defined contribution plans, which are more subject to market ups and downs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <h2>Importance of retirement plans </h2>
                            <br>
                            <h4>Returns for life </h4>
                            <br>
                            <p>
                                Retirement plans such as annuity plans provide you returns for life. You may choose to
                                invest regularly or as a lump sum and stay financially independent for your entire life.
                            </p>
                            <br>
                            <h4>Regular income after retirement</h4>
                            <br>
                            <p>A retirement plan helps you create a regular flow of income after retirement. Retirement
                                plans offer a fixed income which substitutes for your pre-retirement salary. You can use
                                this money to cover your daily expenses, such as groceries, fuel, electricity, and more.
                                You can also meet your post-retirement goals, such as traveling, pursuing a hobby,
                                starting a new venture, and more. </p>
                            <br>
                            <h4>Stay financially prepared for medical emergencies </h4>
                            <br>
                            <p>As you grow old, you may need healthcare facilities. A retirement plan can help you cover
                                these expenses without affecting your savings. </p>
                            <br>
                            <h4>Stay financially independent </h4>
                            <br>
                            <p>A retirement plan can help you continue your current lifestyle even after retirement. The
                                income from the plan can help you meet your day-to-day expenses and meet your financial
                                goals post retirement. </p>
                            <br>
                            <h4>Help your family as well </h4>
                            <br>
                            <p>Retirement plans not only help you but also those around you. Income from the plan can
                                enable you to help your loved ones, including child and your spouse, whenever they are
                                in need of money.
                            </p>
                            <br>
                            <h4>Meet your financial goals
                            </h4>
                            <br>
                            <p>Apart from life’s necessities, retirement plans can also help you fulfil your goals post
                                retirement. You may have retirement goals, such as traveling, pursuing a hobby, starting
                                a new venture, and more. Retirement plans can help you fulfil these goals without any
                                worry. </p>
                            <p>So, how can you have the retirement you’ve always wanted? After all, retirees want to
                                experience all the things they couldn’t do when they were too busy working. Exotic
                                travel vacations, marathon running, novel writing, spending more time with friends and
                                family — the possibilities are almost endless. There are several steps and investment
                                plans we offer, which we can help you multiply your funds and gve you a lifestyle that
                                you always wanted</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/ca2.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <div class="pricing-section">
        <div class="background-image-pricing">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading">
                        <h2>Retirement Plans</h2>
                        <p>These plan helps you structure how much cash, stock, bonds, and real estate to invest in to
                            your retirement funds

                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <h4>Tier 1</h4>
                        <div class="price">
                            <h6>$1,000.00</h6>
                            <span>monthly</span>
                        </div>
                        <div class="dev"></div>
                        <ul>
                            <li style="text-align: center">Maximum amount: $100,000</li>
                            <li style="text-align: center">Monthly ROI: 4%</li>
                            <li style="text-align: center">Duration: 36 months</li>
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
