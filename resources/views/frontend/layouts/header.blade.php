 <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-theme text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-9 col-lg-9 info">
                    <div class="address-info">
                        <ul class="item-flex">
                            <li>
                                <i class="fas fa-envelope-open-text"></i> info@epicaircargo.com
                            </li>
</ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 text-end">
                    <div class="social">
                        <span class="text-light">Air freight and customs clearing, Dar es Salaam</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav bg-dark navbar-default validnavs navbar-sticky">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container-xl">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->


            <div class="container d-flex justify-content-between align-items-center">            

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('frontend/assets/img/logo-epic.png') }}" class="logo logo-display" alt="Epic Air Cargo">
                        <img src="{{ asset('frontend/assets/img/logo-epic.png') }}" class="logo logo-scrolled" alt="Epic Air Cargo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="{{ asset('frontend/assets/img/logo-epic.png') }}" alt="Epic Air Cargo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/about-us">About us</a>
                        </li>
                          <li>
                            <a href="/process">Process</a>
                        </li>
                         <li>
                            <a href="/services">Services</a>
                        </li>
                        <li>
                            <a href="/contact#location">Address</a>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button">
                                <a class="btn-style-one" href="/contact">
                                    <div class="icon">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 17L17 1H7.8" stroke="white" stroke-width="2"/>
                                        </svg>
                                    </div>
                                    <span>Get a Quote</span> 
                                    <div class="icon">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 17L17 1H7.8" stroke="white" stroke-width="2"/>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>

            </div>   
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->