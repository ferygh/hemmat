{{View::make('personErrors')->render()}}

<article class="leftsection">   
    <div class="leftsection-title">
        <h3 class="leftsection-title">
            &nbsp; ارسال سند جدید
        </h3>
    </div>

    <div class="lscontent">

        <fieldset>
            <legend> مشخصات فردی مددجو </legend>
            {{Form::open(['files'=>true])}}
            {{Form::text('name',null,['placeholder'=>'نام و نام خانوادگی مددجو', 'style'=>'width:550px'])}}
            {{Form::text('person_code',null,['placeholder'=>"شماره ملی مددجو", 'style'=>'width:550px'])}}
                {{Form::text('report_id',null,['placeholder'=>"شماره گزارش درج شده در سایت", 'style'=>'width:550px'])}}
                {{Form::text('tel',null,['placeholder'=>"شماره تماس", 'style'=>'width:550px'])}}
                {{Form::text('address',null,['placeholder'=>"آدرس", 'style'=>'width:550px'])}}
        </fieldset>
        <fieldset>
            <legend> تاریخ کمک </legend>
                {{Form::text('date',null,['placeholder'=>"انتخاب از تقویم", 'style'=>'width:550px', 'id'=>'date'])}}
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
            <legend> سایر مشخصات </legend>
            {{Form::label('state','استان',['style'=>'padding-right:20px; float:right'])}}
            {{ Form::select('state', State::lists('title', 'id'), null,['style'=>'width:550px'] ) }}
            {{Form::label('aid','نوع کمک',['style'=>'padding-right:20px; float:right'])}}
                {{ Form::select('aid', Aid::lists('title', 'id') , null,['style'=>'width:550px']) }}
            {{Form::label('income','درآمد',['style'=>'padding-right:20px; float:right'])}}
                {{ Form::select('income', Income::lists('title', 'id'), null,['style'=>'width:550px'] ) }}
            {{Form::label('insurance','بیمه',['style'=>'padding-right:20px; float:right'])}}
                {{ Form::select('insurance', Insurance::lists('title', 'id'), null,['style'=>'width:550px'] ) }}
        </fieldset>
        <fieldset>
            <legend> تصویر سند </legend>
            {{Form::file('document',['style'=>'width:550px'])}}
        </fieldset>
        <fieldset>
            <legend> اطلاعات مالی </legend>

                <select name="payment" style="width:572px;"><option value="1">انتخاب نوع پرداخت</option><option value="2">تهران</option><option value="3">قم</option><option value="4">مشهد</option></select>
            {{Form::label('aid_amount','مبلغ نقدی',['style'=>'padding-right:20px; float:right'])}}
            {{Form::text('aid_amount','0',['style'=>'width:550px', 'placeholder'=>'مبلغ نقدی'])}}
            {{Form::label('cheq_amount','مبلغ چک',['style'=>'padding-right:20px; float:right'])}}
            {{Form::text('cheq_amount','0',['style'=>'width:550px', 'placeholder'=>'مبلغ چک'])}}
            {{Form::label('cheq_number','شماره چک',['style'=>'padding-right:20px; float:right'])}}
            {{Form::text('cheq_number','0',['style'=>'width:550px', 'placeholder'=>'شماره چک'])}}
                {{Form::submit('ارسال سند',['style'=>'width:572px'])}}


        </fieldset>
    {{Form::close()}}

    </div>
</article>