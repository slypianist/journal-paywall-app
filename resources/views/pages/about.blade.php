@extends('layouts.home')

@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/advertise.css')}}">

@endpush

@section('h-content')



@include('includes.news.foot')
@endsection
