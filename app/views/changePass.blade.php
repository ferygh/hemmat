@extends('master')
@section('title')تغییر پسورد@endsection
@section('right')
    @include('tags')
@endsection
@section('left')
    <article class="leftsection">
        <div class="lscontent">
        {{Form::open()}}
        <fieldset>
            <legend> تغییر کلمه عبور</legend>
            <strong>کلمه عبور فعلی</strong>
            <br>
            {{Form::password('old',['style'=>"margin:15px 5px 0 5px; width:450px;"])}}
            <br>
            <strong> کلمه عبور جدید</strong>
            <br>
            {{Form::password('password',['style'=>"margin:15px 5px 0 5px; width:450px;"])}}
            <br>
            <strong> تکرار کلمه عبور جدید</strong>
            <br>
            {{Form::password('confirm',['style'=>"margin:15px 5px 0 5px; width:450px;"])}}
        </fieldset>
        {{Form::submit('ارسال')}}
        {{Form::close()}}
    </div>
    </article>
@endsection