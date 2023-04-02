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
                            <p>Real estate property is an asset class that plays a significant role in many investment
                                portfolios and is an attractive source of current income. Investor allocations to public
                                and private real estate have increased significantly over the last 20 years. Because of
                                the distinct characteristics of real estate property, real estate investments tend to
                                behave differently from other asset classes—such as stocks, bonds, and commodities—and
                                thus have different risks and diversification benefits. Private real estate investments
                                are further differentiated because the investments are not publicly traded and require
                                analytic techniques different from those of publicly traded assets. Because of the lack
                                of directly comparable transactions, an appraisal process is required to value real
                                estate property. Many of the indexes and benchmarks used for private real estate also
                                rely on appraisals. Because of this characteristic, they behave differently from indexes
                                for publicly traded equities, such as the S&P 500, MSCI Europe, FTSE Asia Pacific, and
                                many other regional and global indexes.
                            </p>
                            <br>
                            <p>
                                Our experienced real estate team pinpoints proper ties with the highest potential.
                                We purchase, renovate and manage apartment buildings across the country the fund
                                renovates the units to increase the cash flow. This immediately increases the building’s
                                value as well as the rents.

                            </p>
                            <br>
                            <p>
                                Cash flow from rents is reinvested throughout the fund’s term to continue adding new
                                properties and funding renovations. Since all properties are cash flowing, we wait and
                                let the assets further appreciate so we can sell them at a maximum profit.
                                The risk of a sharp decline in the investment value of assets.When the market is right,
                                we sell the assets and redistribute profits among investors
                            </p>
                            <br>
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
                            <h2>General Characteristics of Real Estate investment. </h2>
                            <p>
                                Real estate investments can occur in four basic forms: private equity (direct
                                ownership), publicly traded equity (indirect ownership claim), private debt (direct
                                mortgage lending), and publicly traded debt (securitized mortgages).
                            </p>
                            <br>
                            <p>
                                Many motivations exist for investing in real estate income property. The key factors are
                                current income, price appreciation, inflation hedge, diversification, and tax benefits.
                                Adding equity real estate investments to a traditional portfolio will potentially have
                                diversification benefits because of the less-than-perfect correlation of equity real
                                estate returns with returns to stocks and bonds.
                            </p>
                            <br>
                            <p>
                                If the income stream can be adjusted for inflation and real estate prices increase with
                                inflation, then equity real estate investments may provide an inflation hedge.
                                Debt investors in real estate expect to receive their return from promised cash flows
                                and typically do not participate in any appreciation in value of the underlying real
                                estate. Thus, debt investments in real estate are similar to other fixed-income
                                investments, such as bonds.
                            </p>
                            <br>
                            <p>
                                Regardless of the form of real estate investment, the value of the underlying real
                                estate property can affect the performance of the investment with location being a
                                critical factor in determining the value of a real estate property.
                            </p>
                            <br>
                            <p>
                                Real estate property has some unique characteristics compared with other investment
                                asset classes. These characteristics include heterogeneity and fixed location, high unit
                                value, management intensiveness, high transaction costs, depreciation, sensitivity to
                                the credit market, illiquidity, and difficulty of value and price determination.
                                There are many different types of real estate properties in which to invest. The main
                                commercial (income-producing) real estate property types are office, industrial and
                                warehouse, retail, and multifamily. Other types of commercial properties typically are
                                classified by their specific use.
                            </p>
                            <br>
                            <p>
                                Certain risk factors are common to commercial property, but each property type is likely
                                to have a different susceptibility to these factors. The key risk factors that can
                                affect commercial real estate include business condition, lead time for new development,
                                excess supply, cost and availability of capital, unexpected inflation, demographics,
                                lack of liquidity, environmental issues, availability of information, management
                                expertise, and leverage.
                                Location, lease structures, and economic factors—such as economic growth, population
                                growth, employment growth, and consumer spending—affect the value of each property type.
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
                            <h2>Advantages of investing in Real Estate:</h2>
                            <br>
                            <h4> Generate Wealth & Build Equity
                            </h4>
                            <p>
                                The first of many advantages of investing in real estate is the power of equity. When
                                you own a house or piece of property, it naturally appreciates, or increases in value.
                                As you pay the mortgage down and allow the house to appreciate, you build equity. Equity
                                is an asset part of your net worth, making it one of the most straightforward ways to
                                generate wealth. For example, according to FRED, the value of homeowner equity nearly
                                tripled between 2011 and 2022.
                                With equity, you have multiple options to generate cash flow and get a return on your
                                investment (ROI). If you sell the home at the right time, you can get a large profit. On
                                the other hand, you can use equity as leverage to increase your investment portfolio
                                even further. With equity from one property, you can buy a rental property to generate
                                monthly income and double your gains from building equity.
                                Reliable Long-term Investment
                            </p>
                            <br>
                            <p>
                                Although the real estate market fluctuates, it is a stable investment that continually
                                increases in value. Compared to the stock market, which is a highly volatile investment,
                                real estate is not prone to frequent market swings or inflation. Properties don’t
                                immediately change in price based on capital contributions or political volatility,
                                making real estate a safe and stable long-term investment.
                            </p>
                            <br>
                            <p>
                                real estate is a physical asset that can always be monetized. Owning real estate
                                benefits the investor by providing ongoing income and tax benefits while the property
                                increases in value. Renting the property provides a cash-on-cash return, and residing
                                and reselling the property provides an ROI
                                Protection From Inflation
                            </p>
                            <br>
                            <p>
                                While most people fear inflation, real estate investors don’t have to. Properties are
                                rarely impacted by the effects of inflation, which is one of the most valuable benefits
                                of real estate investing in current markets. Instead of being negatively impacted, real
                                estate investments generally rise in value along with inflation.
                                As a real estate investor, increases in your expenses will be relative to the increases
                                in property value and income. If you are a landlord, you can maintain or even increase
                                your cash flow according to inflation by adjusting how much you charge for rent. When
                                it’s time to increase the price of rent for your tenants, make sure you know the laws
                                and regulations, provide the correct amount of notice, and write a professional yet
                                direct letter.
                                Rental Properties Provide Passive Income
                            </p>
                            <br>
                            <p>
                                When you invest in real estate, you open the door to generating passive income. As
                                mentioned, property values naturally appreciate, even if you don’t make changes to the
                                property. Rental properties generate a regular monthly income for owners regardless of
                                whether the owner spends hours working on the property or lives in a completely
                                different state. The ability to make money without dedicating a certain amount of time
                                to your real estate investment provides freedom for investors.

                            </p>
                            <br>
                            <p>
                                Of course, properties don’t automatically generate money without an investor putting in
                                an extensive amount of work. It takes time and effort to find and evaluate an investment
                                property, get funding, prepare or maintain the property, market the rental listing, and
                                manage the tenants.
                                Benefits the Community & Provides Housing
                            </p>
                            <br>
                            <p>
                                Most investors focus heavily on the financial indicators of investments, but there are
                                also unquantified benefits of investing in residential real estate. For example,
                                responsible real estate investors can greatly impact the community by improving
                                properties, curb appeal, and providing new housing.
                            </p>
                            <br>
                            <p>
                                When real estate investors buy and repair a dilapidated property, they do much more than
                                simply remove an eyesore. They also provide a new home for residents who need it and
                                ensure that more community members are housed in safe, healthy, clean, and fair
                                conditions.

                            </p>
                            <br>
                            <p>
                                In addition, working as a real estate investor requires you to be heavily involved in
                                the local community. Work with lenders, real estate agents, home inspectors, and
                                contractors frequently, employing them for your properties. You’ll also build
                                relationships with community members who may be neighbors, homesellers, or potential
                                tenants. Working with local businesses helps stimulate your local economy and creates a
                                network of professionals you can recommend and refer to others.

                            </p>
                            <br>
                            <h4>Effective Means of Saving for College Funds or Retirement
                            </h4>
                            <br>
                            <p>
                                Real estate investing, when done right, is a stable way to increase wealth over a period
                                of time. This makes it an ideal method of funding specific types of goals, like college
                                funds and retirement. For instance, parents may buy a rental property with a 15-year
                                mortgage and put the rental income into a savings account. The property could be paid
                                off before the child turns 18, then either sold or used for continual cash flow.

                            </p>
                            <br>
                            <p>
                                On the other hand, the same process could be used to save for retirement or to
                                supplement retirement funds. Since rental income is remarkably stable, retirees can use
                                the cash flow while continuing to build equity.There are also other options that allow
                                investors to maximize tax savings, like Opportunity Zones and Section 1031 of the
                                Internal Revenue Code. Section 1031 allows you to postpone paying taxes on the sale of
                                your property when you reinvest the gains in another property, and opportunity zones
                                allow you to avoid capital gains by investing in a specified piece of land.
                                Freedom, Flexibility & Autonomy

                            </p>

                            <br>
                            <p>
                                Most people focus on the financial benefits of being a real estate investor, but there
                                are also many personal and non-monetary reasons for investing in real estate as a career
                                or side hustle. It allows an individual who may or may not have any professional
                                education or career experience to build wealth and directly impact their entire
                                community. It also provides a level of freedom that most other careers cannot offer,
                                including financial freedom, time freedom, and the flexibility to choose your own unique
                                business strategy.
                            </p>
                            <br>
                            <p>
                                For example, investors who own multiple properties have the freedom to change their
                                primary residence at any time at almost no cost at all. Many people prefer a two-story
                                house when raising a family but decide to downsize to a one-story in their golden years
                                because it is more manageable for them. In contrast, you may choose to “house hack,” or
                                live in a duplex unit or triplex unit to start generating rental income, then move into
                                a larger home when you have multiple properties covering your expenses.
                            </p>
                            <br>
                            <p>
                                Investing is also particularly appealing for those with entrepreneurial spirits since
                                you can invest in a variety of different ways. You may choose to flip houses or hold
                                property to let appreciation create wealth. You may choose to be a landlord and manage
                                properties, or own rental properties and outsource all of the management.

                            </p>

                            <br>
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
                                experience while we pursue the best results for our invests
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
