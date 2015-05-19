
<aside class="rightside">
    <div class="rightside-title">
        <h3 class="rightside-title"> تفکیک اطلاعات </h3>
    </div>

    <div class="rscontent">
        <ul class="topnav">
            <li><a href="#">تفکیک استانی</a>
                <ul>
                    @foreach(State::all() as $item)
                        <li> {{link_to_route('showByState', $item->title, ['id'=>$item->id])}}</li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">تفکیک نوع کمک</a>
                <ul>
                    @foreach(Aid::all() as $item)
                        <li>{{link_to_route('showByAid', $item->title, ['id'=>$item->id])}}</li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">تفکیک بیمه</a>
                <ul>
                    @foreach(Insurance::all() as $item)
                        <li>{{link_to_route('showByInsurance', $item->title, ['id'=>$item->id])}}</li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">تفکیک درآمد</a>
                <ul>
                    @foreach(Income::all() as $item)
                        <li>{{link_to_route('showByIncome', $item->title, ['id'=>$item->id])}}</li>
                    @endforeach
                </ul>
            </li>

        <div class="rightside-title">
         <h3 class="rightside-title"> تفکیک آماری </h3>
        </div> 
        <div class="rscontent">
           <!-- <li>{{link_to_route('stat_state','بر اساس استان')}}<li>
            <li>{{link_to_route('stat_income','بر اساس درآمد')}}<li>
            <li>{{link_to_route('stat_insurance','بر اساس بیمه')}}<li>-->
            <li>{{link_to_route('stat_aid','نمودار تعداد کمک ها')}}<li>
            <li>{{link_to_route('stat_aidSum','نمودار مبلغ کمک ها')}}<li>

        </div>
</ul>
</div>

</aside>