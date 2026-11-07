@extends('frontend.layouts.master')
@section('title', 'How we work - Epic Air Cargo')
@section('content')
    @include('frontend.layouts.PageBanner', ['heading' => 'Four steps, one contact', 'intro' => 'From enquiry to proof of delivery the same person owns the file.'])
    @include('frontend.pages.Process')
    @include('frontend.pages.skills')
@endsection
