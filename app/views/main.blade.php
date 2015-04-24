@extends('master')
@section('title')
    صفحه نخست سیستم
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('css/calendar-blue.css')}}">
    <script src="{{asset('js/jalali.js')}}"></script>
    <script src="{{asset('js/calendar.js')}}"></script>
    <script src="{{asset('js/calendar-setup.js')}}"></script>
    <script src="{{asset('js/calendar-fa.js')}}"></script>
@endsection
@section('right')
    @include('tags')
@endsection
@section('left')
    @include('search')
@endsection