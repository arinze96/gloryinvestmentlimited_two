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
                    <h1>Charity</h1>
                    <p><a href="{{ route('app.home') }}">Home</a> / <span>Charity</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('front/img/rt1.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <p>
                                Our work would not be possible without you: global citizens who want to make positive,
                                lasting change in children’s lives. We are grateful to each and every one of you. We
                                partner with corporations, foundations, individual philanthropists, school groups, and
                                more, connecting our donors to communities and children who would otherwise be
                                overlooked. Whether you’re are an executive looking to boost your company’s social
                                responsibility efforts, or a grandmother wanting to make a special gift in a child’s
                                honor; we’re here to help you make a difference in the world. On behalf of the millions
                                of children that’ll be impacted by your generosity – thank you. We partner to build a
                                world where all children and youth enjoy equal resources and opportunities in society
                                and live free from violence, discrimination, and exploitation. To that end,
                                Gloryinvesmentlimited invests in innovative local organizations, helping them deepen
                                their impact and build their capacity for social change. Together Gloryinvesmentlimited
                                and its partners advance the rights of children and youth facing poverty and injustice
                                and equip them with the tools and skills to reach their full potential.
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
                        <img src="{{ asset('front/img/rt2.jpeg') }}" alt="">
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
                        <img src="{{ asset('front/img/rt3.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="section-heading">
                            <p>
                                The GloryinvestmentlimitedGrowth REIT is designed to be a long-­term investment and is
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
