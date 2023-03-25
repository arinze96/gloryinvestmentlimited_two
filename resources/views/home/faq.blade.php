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

<body style="background-color: #f0f5f5">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div style="background-color: #c0c0c0;
    position:fixed;
    top:0;
    width:100%;
    z-index:1000000;">
        @include('include.home_header')
    </div>


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Frequently Asked Questions</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span>FAQs</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <section class="py-4">
        <div class="container">

            <div class="col-12">
                <div class="content">
                    <div class="bg-pic">
                        <img src="{{ asset('front/img/bg_greven2.png') }}" alt="">
                    </div>
                    <div class="section-head text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.2s">
                        <p style="color:#000; font-size: 30px; font-weight: bold">
                            Account Questions
                        </p>
                    </div>

                    <div class="row justify-content-center">
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">I Forgot My Password, What Should I Do?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        Upon login, click the Forgot your password? link under the button and enter your
                                        email address. A new password will be sent directly to your inbox and you can
                                        then log in and change the password in the Password page. If you do not remember
                                        which email address you used to open your trading account, please contact
                                        Customer Support.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.4s" data-wow-delay="0.4s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">How Do I Own A Fraction Of A Share?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        If you are interested in a stock that has a share price of $500 but you have
                                        only just $100, you can purchase one-fifth of a share of the stock as long as
                                        you use Gloryinvestmentslimiteds who offer fractional shares.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">How Do I Withdraw Funds From My
                                        Gloryinvestmentslimited Account?</h3>
                                    <p class="text" style="font-size: 13px">
                                        Log in to your Gloryinvestmentslimited account, go to the trading platform, click on the
                                        withdraw funds tab. Enter the desired withdrawal amount (minimum $50) and click
                                        Withdraw. Your account manager will then contact you to finalize the transaction
                                        and you will receive your funds after approval and processing time.</p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">Are My Profits Taxable?</h3>
                                    <p class="text" style="font-size: 13px">
                                        Taxation generally depends on the tax law governing your country of residence.
                                        Therefore, Gloryinvestmentslimited cannot delegate responsibility with its clients and they
                                        must tend to their own tax liabilities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.4s" data-wow-delay="0.4s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">Where Can I See My Transaction History?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        Your transaction history together with all the rest of your account activities
                                        may be accessed from the dashboard platform. Simply click the history button to
                                        access the information. You may need to use advanced filters to locate
                                        historical data.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">Why Do I Need To Provide My Private
                                        Information?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        As a regulated investment broker, we protect our clients from fraud or identity
                                        theft. It is for that reason that we require all clients to provide the
                                        necessary documentation for account verification purposes. All documentation is
                                        treated with 100% confidentiality.
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
                        <p style="color:#000; font-size: 30px; font-weight: bold">
                            Software Questions
                        </p>
                    </div>

                    <div class="row justify-content-center">
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">Why Can't I Log In To My Gloryinvestmentslimited
                                        Account?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        The most common reason for login errors happens when the password is copy-pasted
                                        (since there may be spaces before or after the password.) Make sure you type it
                                        correctly. An additional reason for login error is when your browser is storing
                                        old passwords through cookies. Please clear the cookies through the browser
                                        settings and if the problem persists, try entering with a different browser. For
                                        further assistance, please contact Customer Support.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.4s" data-wow-delay="0.4s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">Must I Deposit Money To Register?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        You can open your trading account without having to deposit. However, in order
                                        to start trading and get unlimited access to our education center and
                                        professional services, you need to fund your account with a minimum of $100.


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">What Is A Maintainance Margin
                                        Requirement?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        The minimum amount that an investor must have available in their account in
                                        order to keep it open, or maintain a specific trading position. It is calculated
                                        by multiplying the initial position value by asset maintenance margin %. In
                                        other words, the maintenance margin requirement is considered as the minimum
                                        amount to be collateralized in order to keep a position open.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">Do I Need To Download Any Software To
                                        Use Gloryinvestmentslimited Investment Platform?</h3>
                                    <p class="text" style="font-size: 13px">
                                        No. All that is required to invest with Gloryinvestmentslimited is to register online and
                                        fund your account.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.4s" data-wow-delay="0.4s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">What Are The Returns On Successful
                                        Investment?
                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        The returns on successful investments vary and are based on the movement of the
                                        market, margin amount, leverage ratio, selected asset, investment amount and the
                                        position’s duration.


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 20px; height: 350px" class="col-xl-4 col-lg-6 wow fadeInUp"
                            data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="statis-boxx"
                                style="background-color:white; border-radius: 20px; padding: 20px; height: 100%">
                                <div class="statis-content">
                                    <h3 class="subtitle" style="font-size: 20px">What Are The Available Deposit
                                        Methods?

                                    </h3>
                                    <p class="text" style="font-size: 13px">
                                        Depositing funds into your trading account can be made in multiple ways, using
                                        major Bitcoin, ethereum and USDT.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
