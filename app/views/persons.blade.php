

<article class="leftsection">
    <div class="leftsection-title">
        <h3 class="leftsection-title">
            &nbsp; بازیابی اسناد بایگانی شده
        </h3>
    </div>

    <div class="lscontent">
        <div class="showresult"> نمایش نتایج </div>
        @foreach($persons as $item)
        <div class="result">
            <div style="float:right; width:595px; background:#eeeef7; padding:0px 0px 0px 0; margin-bottom:5px;font:14px MitraBold;">                               <div style="float:left; background:#6c7097; color:#eeeef7; padding:0px 5px; margin:-1px;"> {{$item->report_id}} </div>
                <div style=" float:right;border-left:solid 1px #dddce9; padding:0 7px;"> {{$item->name}}</div>
                <div style=" float:right;border-left:solid 1px #dddce9; padding:0 7px;"> {{$item->person_code}} </div>
                <div style=" float:left;border-left:solid 1px #dddce9; padding:0 7px;"> {{link_to_route('edit_person','ویرایش',['id'=>$item->id])}}</div>
                <div style=" float:left;border-left:solid 1px #dddce9; padding:0 7px;"> <a href="#">چاپ</a></div>
            </div>
            <div class="result-img"> <img src="{{asset($item->document)}}" />  </div>
            <div class="result-feild-sec">
                <div class="result-feild" style="width:193px;"> <strong>نوع درآمد</strong>    : {{$item->income->title}} </div>
                <div class="result-feild" style="width:193px;"> <strong>نوع بیمه</strong    >: {{$item->insurance->title}} </div>
                <div class="result-feild" style="width:193px;"> <strong>نوع کمک</strong>    :{{$item->aid->title}}</div>
                <div class="result-feild" style="width:193px;"> <strong>تاریخ</strong>:{{jDate::forge($item->date)->format('Y/m/d')}} </div>
                <div class="result-feild" style="width:193px;"> <strong>مبلغ چک</strong     >: {{number_format($item->cheq_amount)}} </div>
                <div class="result-feild" style="width:193px;"> <strong>مبلغ نقد</strong    >: {{number_format($item->aid_amount)}} </div>
                <div class="result-feild" style="width:193px;"> <strong>شماره چک</strong    >: {{$item->cheq_number}} </div>
                <div class="result-feild" style="width:193px;"> <strong>مبلغ کل</strong     >: {{number_format($item->cheq_amount + $item->aid_amount)}}
                </div>
            </div>
            <div class="result-feild" style="width:363px;"> <strong>آدرس</strong>: 
                {{$item->address}} </div>
            <div class="result-feild" style="width:193px;"> <strong>تلفن</strong>:
                {{$item->tel}} </div>
        </div>
        @endforeach

    </div>
</article>