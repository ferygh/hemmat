@section('head')
    <link rel="stylesheet" href="{{asset('css/calendar-blue.css')}}">
    <script src="{{asset('js/jalali.js')}}"></script>
    <script src="{{asset('js/calendar.js')}}"></script>
    <script src="{{asset('js/calendar-setup.js')}}"></script>
    <script src="{{asset('js/calendar-fa.js')}}"></script>
@endsection
<div class="search-area">
    <div class="searchmode">
        <div class="search-mode-name">
            <h3> جستجو بر اساس نام </h3>
        </div>
        {{Form::open(['route'=>'searchByName'])}}
        {{Form::text('term', null, ['placeholder'=>'جستجو بر اساس نام  '])}}
        {{Form::submit('')}}
        {{Form::close()}}
        <!-- search tips -->
        <div class="notification">
            <p>
                برای جستجو بر اساس نام و نام خوانداگی مددجو، از فیلد بالا استفاده کنید.
            </p>
        </div>
    </div>
</div>
<!-- /search area -->
<!-- search tips -->
<div class="searchmode">
    <div class="search-mode-name">
        <h3> جستجو بر اساس شماره ملی </h3>
    </div>
    <div class="search-area">
        <a href="#" class="add" title="ارسال سند جدید"> </a>
        {{Form::open(['route'=>'searchByPersonCode'])}}
        {{Form::text('term', null, ['placeholder'=>'جستجو بر اساس شماره ملی  '])}}
        {{Form::submit('')}}
        {{Form::close()}}
        <!-- search tips -->
        <div class="notification">
            <p>
                برای جستجو بر اساس شماره ملی مددجو، از فیلد بالا استفاده کنید.
            </p>
        </div>
    </div>
</div>
<!-- /search area -->
<div class="searchmode">
    <div class="search-mode-name">
        <h3> جستجو بر اساس شماره چک </h3>
    </div>

    <div class="search-area">
        {{Form::open(['route'=>'searchByCheqNumber'])}}
        {{Form::text('term', null, ['placeholder'=>'جستجو بر اساس شماره چک  '])}}
        {{Form::submit('')}}
        {{Form::close()}}
        <div class="notification">
            <p>
                اگر می خواهید بر اساس شماره چک جستجو کنید، در فیلد بالا بنویسید.
            </p>
        </div>
    </div>
</div>
<div class="searchmode">
    <div class="search-mode-name">
        <h3> جستجو بر اساس مبلغ چک </h3>
    </div>

    <div class="search-area">
        {{Form::open(['route'=>'searchByCheqAmount'])}}
        {{Form::text('term', null, ['placeholder'=>'جستجو بر اساس مبلغ چک  '])}}
        {{Form::submit('')}}
        {{Form::close()}}
        <div class="notification">
            <p>
                اگر می خواهید بر اساس مبلغ چک جستجو کنید، مبلغ را به تومان در فیلد بالا بنویسید.
            </p>
        </div>

        <div class="search-area">
            {{Form::open(['route'=>'searchByDate'])}}
                {{Form::label('start', 'از')}}
                {{Form::text('start', null,['id'=>'date'])}}
            <script>
                Calendar.setup({
                    inputField: 'date',
                    button: 'date_btn',
                    ifFormat: '%Y/%m/%d',
                    dateType: 'jalali'
                });
            </script>
                {{Form::label('end','تا')}}
                {{Form::text('end', null, ['id'=>'date2'])}}
            <script>
                Calendar.setup({
                    inputField: 'date2',
                    button: 'date_btn',
                    ifFormat: '%Y/%m/%d',
                    dateType: 'jalali'
                });
            </script>
               <br> {{Form::submit('')}}
            {{Form::close()}}
            <div class="notification">
                <p>
برای جستجو در بازه زمانی از فرم بالا استفاده کنید                </p>
            </div>
        </div>
    </div>
    <!-- /search area -->
    <div class="clear"> </div>
    <div class="tafkik">
        <h3> تفکیک اسناد </h3>
    </div>
    <!-- right - left -->

    <div class="tafkik-content">
        <h3 class="box-title"> تفکیک استانی </h3>
        <p>
        <div class="rs-list">
            <ul>
                @foreach($states as $state)
                    <li> {{link_to_route('showByState', $state->title, ['id'=>$state->id])}}</li>
                @endforeach
            </ul>
        </div>
        </p>
    </div>

    <div class="tafkik-content">
        <h3 class="box-title"> تفکیک میزان درآمد </h3>
        <p>
        <div class="rs-list">
            <ul>
                @foreach($incomes as $income)
                    <li> {{link_to_route('showByIncome', $income->title, ['id'=>$income->id])}}</li>
                @endforeach
            </ul>
        </div>
        </p>
    </div>

    <div class="tafkik-content">
        <h3 class="box-title"> تفکیک نوع کمک </h3>
        <p>
        <div class="rs-list">
            <ul>
                @foreach($aids as $aid)
                    <li> {{link_to_route('showByAid', $aid->title, ['id'=>$aid->id])}}</li>
                @endforeach
            </ul>
        </div>
        </p>
    </div>


    <div class="tafkik-content">
        <h3 class="box-title"> تفکیک نوع بیمه </h3>
        <p>
        <div class="rs-list">
            <ul>
                @foreach($insurances as $insurance)
                    <li> {{link_to_route('showByInsurance', $insurance->title, ['id'=>$insurance->id])}}</li>
                @endforeach
            </ul>
        </div>
        </p>
    </div>