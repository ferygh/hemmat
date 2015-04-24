@extends('master')
@section('title')
    جستجو بر اساس استان
@endsection
@section('body')
    <div class="base">
        <div class="pagedetail">
            <div class="pagedetail-title">
                <h3>&equiv; نمایش نتایج برای تفکیک استان " <font color="#CC9900"> {{$term}} </font> " &equiv; اطلاعات این نوع کمک را در زیر مشاهده کنید ... </h3>
            </div>
            @include('info')
        </div>
        <!-- search result -->
        @include('persons')
            <!-- search area -->

@endsection
@section('search')
@include('search')
@endsection