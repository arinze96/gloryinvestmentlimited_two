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

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Children Account</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span>Children Account</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/child2.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            {{-- <h2>Background of our company</h2> --}}
                            <p>As a parent, We want the best for our kids. We want to do everything Possible to set them
                                up for success.
                            </p>
                            <br>
                            <p>
                                We at Gloryinvesmentlimited have spoken with many parents and grandparents who have one simple
                                question: How can I invest in my child or grandchild’s future? Knowing the power of
                                compound interest, some couple wrote us that they wanted to kick-start their son’s
                                retirement savings. Others just want to help their kids get a college diploma without
                                taking on any debt.
                            </p>
                            <br>
                            <p>
                                Those are great concerns to have, so give yourself a high five! Whether “Junior” is
                                still crawling around the living room floor or getting ready to graduate from high
                                school, we got you covered, you can secure and invest in their future. The Monetary
                                Trades Children’s Account is a unique investments account designed to allow parents
                                invest then save for their children’s future and teach them about savings/investments
                                from a tender age. The account is modeled in two tiers for young children and teens with
                                an overarching objective of making savings fun for them and teaching them financial
                                discipline.
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
                            <h2>Gloryinvesmentlimited CHILDREN’S ACCOUNT(0-15)</h2>
                            <p>
                                BGC account is modeled in two tiers for young children and teens with an overarching objective of making savings fun for them and teaching them financial discipline.
                            </p>
                            <br>
                            <p>
                                An account specifically for children between the ages of 0-15yrs
                            </p>
                            <br>
                            <p>
                                ROI rate at 150% per annum (withdrawal once a year and only if there are emergency needs)
                            </p>
                            <br>
                            <p>
                                Zero account opening balance
                            </p>
                            <br>
                            <p>
                                Minimum Investment of $5,000
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/chld1.jpeg') }}" alt="">
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
                        <img src="{{ asset('front/img/child3.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <h2>Gloryinvesmentlimited CHILDREN’S ACCOUNT FOR TEENS (16 AND ABOVE)</h2>
                            <p>
                                MT Teens account is a next level account for teenagers from 16years and above.
                            </p>
                            <br>
                            <p>
                                An account specifically for children between the ages of 16-Above
                            </p>
                            <br>
                            <p>
                                Interest rate at 200%( withdraw twice a year and more only if they are emergency needs) 
                            </p>
                            <br>
                            <p>
                                Zero account opening balance
                            </p>
                            <br>
                            <p>
                                Minimum Investment of $5,000
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Ends Here -->
    <div class="pricing-section">
        <div class="background-image-pricing">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading">
                        <h2>Children Plans</h2>
                        <p>These plan helps you structure how much cash, stock, bonds, and real estate to invest in to
                            your children account

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
                            <li style="text-align: center">Maximum amount: $50,000</li>
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
