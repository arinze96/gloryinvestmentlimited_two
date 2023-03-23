<div class="navigation" style="z-index: 25000; position:static; background-color: #7cbf42">
    <div class="nav-container">
        <div class="brand">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/gil.png') }}" class="logo" alt="logo" style="width: 100%; height: 70px">
            </a>
        </div>
        <nav style="background-color: #7cbf42">
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!"><span></span></a>
            </div>
            <ul class="nav-list" style="background-color: #7cbf42">
                <li ><a style="background-color: #7cbf42; color:white"  href="{{ route('app.home') }}">Home</a></li>
                <li><a style="background-color: #7cbf42; color:white" href="#!">Company</a>
                    <ul class="nav-dropdown">
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('about') }}">About Us</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('faq') }}">FAQs</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('what-we-offer') }}">What we offer</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('team') }}">Our team</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('user.certificates') }}">Our Certificates</a></li>
                    </ul>
                </li>
                <li><a style="background-color: #7cbf42; color:white" href="#!">Investments</a>
                    <ul class="nav-dropdown">
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('real_estate') }}">Real Estate</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('investments') }}">Investment Plans</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('retirement') }}">Retirement</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('children-account') }}">Children Account</a></li>
                        <li><a style="background-color: #7cbf42; color:white" href="{{ route('nfp') }}">NFP</a></li>
                    </ul>
                </li>
                <li><a style="background-color: #7cbf42; color:white" href="{{ route('charity') }}">Charity</a></li>
                <li><a style="background-color: #7cbf42; color:white" href="{{ route('user.login') }}"> Login</a></li>
                <li><a style="background-color: #7cbf42; color:white" href="{{ route('user.register') }}"> Register</a></li>
            </ul>
        </nav>
    </div>
</div>
