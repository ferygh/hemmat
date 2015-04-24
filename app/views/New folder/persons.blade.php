@foreach($persons as $item)
    <div class="sr-tumb">
        <img src="{{asset($item->document)}}" />
        <div class="search-result">
            <div class="sr-name">
                <h3>{{$item->report_id}}</h3>
                <h3>نام مددجو: {{$item->name}} </h3>
                <h3>شماره ملی: {{$item->person_code}} </h3>
                <h3>تاریخ: {{jDate::forge($item->date)->format('Y/m/d')}}</h3>
                <h3> <a onClick="javascript:window.open('#','print','status=yes,scrollbars=yes,toolbar=no,menubar=yes,location=no ,width=500px,height=500px')" href="javascript:void(0)" class="btn btn-default" ><span class="fa fa-print"></span> چاپ</a> </h3>
                <h3> {{link_to_route('edit_person','ویرایش',['id'=>$item->id])}} </h3>
            </div>
            <div class="sr-detail">
                <ul>
                    <li> استان: {{$item->state->title}} </li>
                    <li> نوع کمک: {{$item->aid->title}} </li>
                    <li> نوع بیمه: {{$item->insurance->title}} </li>
                    <li> نوع درآمد: {{$item->income->title}} </li>
                    @if($item->cheq_amount>0)
                        <li> مبلغ چک: {{number_format($item->cheq_amount)}} </li>
                        <li> شماره چک: {{$item->cheq_number}} </li>
                    @endif
                    @if($item->aid_amount)
                        <li> مبلغ نقد: {{number_format($item->aid_amount)}} </li>
                    @endif
                    <li> کل:{{number_format($item->cheq_amount+$item->aid_amount)}} </li>

                </ul>

                <div class="sr-addres">
                    آدرس: {{$item->address}}
                </div>
                <div class="sr-tell">
                    <p>
                        تلفن: {{$item->tel}}
                    </p>
                </div>
            </div>

        </div>
@endforeach
{{$persons->links()}}