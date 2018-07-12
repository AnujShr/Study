@extends('layouts.master')

@section('home-content')
    @include('front.top-section')
@endsection

@section('page-content')
    @include('front.content-section')
@endsection

@section('contact')
    @include('front.contact')
@endsection

@section('photoswipe')
    @include('front.photoswipe')
@endsection
