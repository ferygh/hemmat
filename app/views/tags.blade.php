
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
         <h3 class="rightside-title"> تفکیک نموداری </h3>
        </div> 
        <div class="rscontent">
            <li><a href="http://hemmat.dev/stat/state">بر اساس استان</a></li>
            <li><a href="http://hemmat.dev/stat/insurance">بر اساس بیمه</a></li>
            <li><a href="http://hemmat.dev/stat/income">بر اساس درآمد</a></li>
            <li><a href="http://hemmat.dev/stat/aid">بر اساس نوع کمک</a></li>
        </div>
</ul>
</div>

</aside>