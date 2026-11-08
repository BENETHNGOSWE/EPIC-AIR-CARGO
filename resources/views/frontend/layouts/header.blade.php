 <!-- Start Header Top 
    ============================================= -->
    @php
        /* The desk's own line goes here, e.g. '+255 7XX XXX XXX' (digits deliberately masked: no real number belongs in a comment). While it is empty the phone
           item is not rendered at all: the number in the reference screenshot belongs to the
           sea-freight site, and the two companies must not share contact details. */
        $deskPhone = '';
        $deskPhoneHref = $deskPhone !== '' ? 'tel:+' . preg_replace('/\D+/', '', $deskPhone) : '';
    @endphp
    <div class="top-bar-area top-bar-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 info">
                    <div class="address-info">
                        <ul class="item-flex">
                            @if($deskPhone !== '')
                            <li>
                                <a href="{{ $deskPhoneHref }}"><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ $deskPhone }}</a>
                            </li>
                            @endif
                            <li>
                                <a href="mailto:info@epicaircargo.com"><i class="fas fa-envelope-open-text" aria-hidden="true"></i> info@epicaircargo.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 top-bar-social">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank" rel="noopener" aria-label="X"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/accounts/login/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    </ul>
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
                        <img src="{{ asset('frontend/assets/img/logo-epic.png').'?v=20261108a' }}" class="logo logo-display" alt="Epic Air Cargo">
                        <img src="{{ asset('frontend/assets/img/logo-epic.png').'?v=20261108a' }}" class="logo logo-scrolled" alt="Epic Air Cargo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="{{ asset('frontend/assets/img/logo-epic.png').'?v=20261108a' }}" alt="Epic Air Cargo">
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