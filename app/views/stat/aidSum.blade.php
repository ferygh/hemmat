<script type="text/javascript" src="{{asset('js/canvasjs.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.canvasjs.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scriptbreaker-multiple-accordion-1.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/calendar-blue.css')}}">
<script src="{{asset('js/jalali.js')}}"></script>
<script src="{{asset('js/calendar.js')}}"></script>
<script src="{{asset('js/calendar-setup.js')}}"></script>
<script src="{{asset('js/calendar-fa.js')}}"></script>

@extends('master')
@section('title')
   نمودار استان
@endsection
@section('right')
    @include('tags')
@endsection
@section('left')
<style type="text/css">
.canvasjs-chart-container
{
	text-align: right !important;
}
</style>
	


<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text:"{{$text}}" ,
			horizontalAlign: "right",
			fontFamily: "Tahoma",
			fontSize: 20
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center",
			fontSize: 17,
			fontFamily: "Tahoma"        
		},
		theme: "theme3",
		data: [
		{        
			type: "pie",       
			indexLabelFontFamily: "Tahoma",       
			indexLabelFontSize: 10,
			indexLabel: "{label} {y}",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}",
			dataPoints: [
					@foreach($aidSum as $aid)
						{  y: {{$aid->sum}}, legendText:"{{Aid::find($aid->aid_id)->title}}", label: "{{Aid::find($aid->aid_id)->title}}" },
					@endforeach
			]
		}
		]
	});
	chart.render();
}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<div class="lscontent">
<fieldset>
            <legend> جستجو در یک بازه زمانی خاص </legend>
            {{Form::open(['route'=>'stat_aidSum','method'=>'GET'])}}
                <div class="ls-right">
                    {{Form::text('start',null,['style'=>"width:230px; margin-right:5px;", 
                    'id'=>'date', 'placeholder'=>'از تاریخ'])}}
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
                    {{Form::text('end',null,['style'=>'width:230px; margin-right:5px;',
                    'id'=>'date2', 
                    'placeholder'=>'تا تاریخ'])}}
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
 
@endsection