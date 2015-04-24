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
			indexLabelFontFamily: "Tahoma",       
			indexLabelFontSize: 10,
			indexLabel: "{label} {y}",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}",
			dataPoints: [
				@foreach($state_info as $state)
					{  y: {{$state->total}}, legendText:"{{State::find($state->state_id)->title}}", label: "{{State::find($state->state_id)->title}}" },
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