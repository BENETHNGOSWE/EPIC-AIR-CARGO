@extends('frontend.layouts.master')
@section('title', 'Our services - Epic Air Cargo')
@section('content')
    @include('frontend.layouts.PageBanner', ['heading' => 'Import, export, clearing, delivery', 'intro' => 'Four things we do properly, by air, from Dar es Salaam.'])
    @include('frontend.pages.Services')
    @include('frontend.pages.Process')
@endsection
