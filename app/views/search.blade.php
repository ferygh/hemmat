<article class="leftsection">
    <div class="leftsection-title">
        <h3 class="leftsection-title">
            &nbsp; بازیابی اسناد بایگانی شده
        </h3>
    </div>

    <div class="lscontent">

        <fieldset>
            <legend> جستجو بر اساس نام </legend>
            {{Form::open(['route'=>'searchByName'])}}
            {{Form::text('term',null,['style'=>'width:550px', 'placeholder'=>'نام و نام خانوادگی'])}}
            {{Form::submit('جستجو',['style'=>'width:572px'])}}
            {{Form::close()}}
            <div class="informations">
                برای جستجو بر اساس نام و نام خوانداگی مددجو، از فیلد بالا استفاده کنید.
            </div>
        </fieldset>
        <div class="clear"> </div>
        <fieldset>
            <legend> جستجو بر اساس شماره ملی </legend>
            {{Form::open(['route'=>'searchByPersonCode'])}}
            {{Form::text('term',null,['style'=>'width:550px', 'placeholder'=>'شماره ملی'])}}
            {{Form::submit('جستجو',['style'=>'width:572px'])}}
            {{Form::close()}}
            <div class="informations">
                برای جستجو بر اساس شماره ملی مددجو، از فیلد بالا استفاده کنید.
            </div>
        </fieldset>
        <div class="clear"> </div>
        <fieldset>
            <legend> جستجو بر اساس شماره چک </legend>
            {{Form::open(['route'=>'searchByCheqNumber'])}}
            {{Form::text('term',null,['style'=>'width:550px', 'placeholder'=>'شماره چک'])}}
            {{Form::submit('جستجو',['style'=>'width:572px'])}}
            {{Form::close()}}
            <div class="informations">
                اگر می خواهید بر اساس شماره چک جستجو کنید، در فیلد بالا بنویسید.
            </div>
        </fieldset>
        <div class="clear"> </div>
        <fieldset>
            <legend> جستجو بر اساس مبلغ چک </legend>
            {{Form::open(['route'=>'searchByCheqAmount'])}}
                {{Form::text('term',null,['style'=>'width:550px', 'placeholder'=>'مبلغ چک'])}}
                {{Form::submit('جستجو',['style'=>'width:572px'])}}
            {{Form::close()}}
            <div class="informations">
                اگر می خواهید بر اساس مبلغ چک جستجو کنید، مبلغ را به تومان در فیلد بالا بنویسید.
            </div>
        </fieldset>
        <div class="clear"> </div>
        <fieldset>
            <legend> جستجو در یک بازه زمانی خاص </legend>
            {{Form::open(['route'=>'searchByDate'])}}
                <div class="ls-right">
                    {{Form::text('start',null,['style'=>"width:230px; margin-right:5px;", 'id'=>'date', 'placeholder'=>'از تاریخ'])}}
                </div>
            <script>
                Calendar.setup({
                    inputField: 'date',
                    button: 'date_btn',
                    ifFormat: '%Y/%m/%d',
                    dateType: 'jalali'
                });
            </script>
                <div class="ls-left">
                    {{Form::text('end',null,['style'=>'width:230px; margin-right:5px;', 'id'=>'date2', 'placeholder'=>'تا تاریخ'])}}
                </div>
            <script>
                Calendar.setup({
                    inputField: 'date2',
                    button: 'date_btn',
                    ifFormat: '%Y/%m/%d',
                    dateType: 'jalali'
                });
            </script>
                {{Form::submit('جستجو',['style'=>'width:572px'])}}
            {{Form::close()}}
            <div class="informations">
                با استفاده از این الگوریتم، می توانید در یک بازه زمانی خاص تمامی کمک های انجام شده را مشاهده کنید.
            </div>
            <div class="informations">
                از تقویم ارائه شده استفاده کنید.
            </div>
        </fieldset>

    </div>
</article>