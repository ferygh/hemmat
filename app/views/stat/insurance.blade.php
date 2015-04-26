<script type="text/javascript" src="{{asset('js/canvasjs.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.canvasjs.min.js')}}"></script>


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
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 10,
			indexLabel: "{label} {y}",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}",
			dataPoints: [
				@foreach($insurance_info as $insurance)
					{  y: {{$insurance->total}}, legendText:"{{Insurance::find($insurance->insurance_id)->title}}", label: "{{Insurance::find($insurance->insurance_id)->title}}" },
				@endforeach
			]
		}
		]
	});
	chart.render();
}
</script>
<div id="chartContainer" dir="rtl" style="height: 300px; width: 100%;"></div>

@endsection