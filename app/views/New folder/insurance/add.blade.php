@extends('master')
@section('title')
    کمکها
@endsection
@section('head')
    <script type="text/javascript">

        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if(e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }

    </script>
@endsection
@section('body')
    <div class="dashboard-panel">
        <div class="pagedetail-title">
            <h3>&equiv; تنظیمات استان </h3>
        </div>
        <p>
        <div class="setting">
            <div class="addsetting" onclick="toggle_visibility('addsetting-form');"> <a href="#"> + افزودن </a> </div>
            <div id="addsetting-form">
                {{Form::open()}}
                    {{Form::text('title', null, ['placeholder'=>'عنوان را بنویسید...'])}}
                    {{Form::submit('ثبت')}}
                {{Form::close()}}
            </div>

            <div class="c"> </div>
            <ul>
                @foreach($insurances as $item)
                <li> <h3>{{$item->title}}</h3>
                    <br />
                    &mdash; <a href="#" onclick="toggle_visibility('edit-form');"><font color="#996600"> ویرایش </font></a>
                    &nbsp;
                    &mdash; <a href="#"><font color="#f00"> حذف </font></a>
                </li>
                @endforeach

            </ul>
        </div>
        </p>
    </div>
    @endsection