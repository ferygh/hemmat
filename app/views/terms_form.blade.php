<article class="leftsection">
    <div class="leftsection-title">
        <h3 class="leftsection-title">
            &nbsp; افزودن متغیر
        </h3>
    </div>

    <div class="lscontent">
        <div class="result">
            {{Form::open()}}
            {{Form::text('title',null,['style'=>"margin:15px 5px 0 5px; width:450px;",'placeholder'=>"نام متغیر جدید را وارد کنید"  ])}}
            {{Form::submit('اضافه کن',['style'=>"margin:15px 5px 5px 5px;"])}}
            {{Form::close()}}

        </div>
        @foreach($term as $item)
            <div class="result">
                <h2 class="Var">{{$item->title}}</h2>
            </div>
        @endforeach

    </div>
</article>