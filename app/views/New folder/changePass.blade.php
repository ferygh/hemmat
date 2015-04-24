@extends('master')
@section('title')تغییر پسورد@endsection
@section('body')
    <div class="dashboard-panel">
        {{Form::open()}}
        <fieldset>
            <legend> تغییر کلمه عبور</legend>
            <strong>کلمه عبور فعلی</strong>
            <br>
            {{Form::password('old')}}
            <br>
            <strong> کلمه عبور جدید</strong>
            <br>
            {{Form::password('password')}}
            <br>
            <strong> تکرار کلمه عبور جدید</strong>
            <br>
            {{Form::password('confirm')}}
        </fieldset>
        {{Form::submit('ارسال')}}
        {{Form::close()}}
    </div>
@endsection