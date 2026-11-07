@extends('frontend.layouts.master')
@section('title', 'Get in touch - Epic Air Cargo')
@section('content')
    @include('frontend.layouts.PageBanner', ['heading' => 'Request a quote', 'intro' => 'Send the commodity, weight, dimensions and dates. We price it or tell you why we should not.'])
    @include('frontend.pages.Quote')

    <div class="default-padding-bottom" id="location">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Where to find us</h4>
                        <h2 class="title">Masasi Street, Ndanda St, Dar es Salaam</h2>
                        <p>Email <a href="mailto:info@epicaircargo.com">info@epicaircargo.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
