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
			text:"{{$text}}" 
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme2",
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
				@foreach($income_info as $income)
					{  y: {{$income->total}}, legendText:"{{Income::find($income->income_id)->title}}", label: "{{Income::find($income->income_id)->title}}" },
				@endforeach
			]
		}
		]
	});
	chart.render();
}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>

@endsection