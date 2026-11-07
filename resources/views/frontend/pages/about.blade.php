@extends('frontend.layouts.master')
@section('title', 'About us - Epic Air Cargo')
@section('content')
    @include('frontend.layouts.PageBanner', ['heading' => 'Who you are dealing with', 'intro' => 'A freight and clearing desk that takes the flight, the entry and the delivery as one job.'])
    @include('frontend.pages.aboutus')
    @include('frontend.pages.skills')
@endsection
