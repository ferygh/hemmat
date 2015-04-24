@extends('master')
@section('title')
    نتیایج جستجو
@endsection
@section('body')
    <div class="base">
        <div class="succes-not">
            <p>
                نمایش نتایج جستجو برای: <strong>{{$term}}</strong>
            </p>
        </div>
        <!-- search result -->
        @include('datepersons')
        @include('search')
    </div>

@endsection