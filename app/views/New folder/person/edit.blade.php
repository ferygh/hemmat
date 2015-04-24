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
@section('body')
    <div class="base">
        <div class="dashboard-panel">
            <div class="pagedetail-title">
                <h3>&equiv; ارسال سند جدید </h3>
            </div>
            {{Form::open(['files'=>true])}}
            <p>
            <fieldset>
                <legend><b> مشخصات فردی مددجو </b></legend>
                <strong> نام و نام خانوادگی مددجو: </strong>
                <br />
                {{Form::text('name', $person->name, ['placeholder'=>'مثال علی محسنی'])}}
                {{ $errors->first('name', '<p>:message</p>') }}
                <br />
                <strong>شماره گزارش: </strong>
                <br />
                {{Form::text('report_id', $person->report_id)}}
                {{ $errors->first('report_id',  '<p>:message</p>') }}

                <br />

                <strong> کدملی مددجو:</strong>
                <br />
                {{Form::text('person_code', $person->person_code)}}
                {{ $errors->first('person_code', '<p>:message</p>') }}

                <br />
                <strong> شماره تماس: </strong>
                <br />
                {{Form::text('tel', $person->tel)}}
                {{ $errors->first('tel', '<p>:message</p>') }}

                <br />
                <strong> آدرس مددجو:</strong>
                <br />
                {{Form::text('address', $person->address)}}
                {{ $errors->first('address', '<p>:message</p>') }}


            </fieldset>

            <fieldset>
                <legend><b> تاریخ ثبت سند </b></legend>
                {{Form::text('date', $date,['id'=>'date'])}}
                {{ $errors->first('date', '<p>:message</p>') }}
                <script>
                    Calendar.setup({
                        inputField: 'date',
                        button: 'date_btn',
                        ifFormat: '%Y/%m/%d',
                        dateType: 'jalali'
                    });
                </script>
            </fieldset>

            <fieldset>
                <legend><b> مشخصات دیگر </b></legend>
                <strong> استان مددجو:</strong>
                <br />
                {{ Form::select('state', State::lists('title', 'id'), $person->state_id ) }}
                <strong> نوع کمک:</strong>
                <br />

                {{ Form::select('aid', Aid::lists('title', 'id'), $person->aid_id ) }}

                <br />
                <strong> نوع درامد: </strong>
                <br />

                {{ Form::select('income', Income::lists('title', 'id'), $person->income_id ) }}

                <br />
                <strong> نوع بیمه: </strong>
                <br />

                {{ Form::select('insurance', Insurance::lists('title', 'id'), $person->insurance_id ) }}

                <br />
                <strong> تصویر سند: </strong>
                <br />
                {{Form::file('document')}}
                {{ $errors->first('document', '<p>:message</p>') }}

                <br />
                <strong> مبلغ کمک (به تومان): </strong>
                <br />

            </fieldset>
            <fieldset>
                <legend>اطلاعات مالی</legend>
                <strong>نوع پرداخت: </strong>
                <br/>
                {{Form::select('amount_type', [
                '1'=>'نقد و چک',
                '2'=>'نقد',
                '3'=>'چک'
                ])}}

                <br/>
                <strong>مبلغ نقدی:</strong>
                <br/>
                {{Form::text('aid_amount',$person->aid_amount)}}
                {{ $errors->first('aid_amount', '<p>:message</p>') }}

                <br/>
                <strong>مبلغ چک:</strong>
                <br/>
                {{Form::text('cheq_amount',$person->cheq_amount)}}
                {{ $errors->first('cheq_amount', '<p>:message</p>') }}

                <br/>
                <strong>شماره چک:</strong>
                <br/>
                {{Form::text('cheq_number',$person->cheq_number)}}
                {{ $errors->first('cheq_number', '<p>:message</p>') }}

            </fieldset>
            {{Form::submit('ارسال سند')}}

            {{Form::close()}}
        </div>
    </div>
@endsection