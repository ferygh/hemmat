<?php
$total_income = 0;
foreach($persons as $item){
    $total_income += $item->cheq_amount + $item->aid_amount;
}
?>
<p>
<ul>
    <li> جمع مبلغ کمک ها:{{number_format($total_income)}}  تومان </li>
    <li> تعداد مددجویان: {{$persons->count()}} نفر </li>
</ul>
<div class="pagedetail-list">
    <h3> استان ها : </h3>
    <ul>
        @foreach($info_states as $item)
            @if($item['count']>0)
                 <li>{{$item['title']}} : {{$item['count']}}</li>
            @endif
        @endforeach
    </ul>
</div>
<div class="pagedetail-list">
    <h3> نوع بیمه ها در این نوع کمک: </h3>
    <ul>
        @foreach($info_insurances as $item)
            @if($item['count']>0)
                <li>{{$item['title']}} : {{$item['count']}}</li>
            @endif
        @endforeach
    </ul>
</div>
<div class="pagedetail-list">
    <h3> نوع کمک: </h3>
    <ul>
        @foreach($info_incomes as $item)
            @if($item['count']>0)
                <li>{{$item['title']}} : {{$item['count']}}</li>
            @endif
        @endforeach
    </ul>
</div>
<div class="pagedetail-list">
    <h3> نوع درآمد: </h3>
    <ul>
        @foreach($info_aids as $item)
            @if($item['count']>0)
                <li>{{$item['title']}} : {{$item['count']}}</li>
            @endif
        @endforeach
    </ul>
</div>
</p>