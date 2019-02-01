@extends('layouts.app')

@section('content')

<div class="col-md-11" id="page-content-wrapper">
	<div class="header">
       <h1 class="p-title"> Moj napredak </h1><hr> 
    </div>
   <div class="d-flex prog justify-content-center align-items-center">
	   	<div class="prog-inner">
	   		 <div class="card border-light">
              <div class="card-body">
					<canvas id="myChart"></canvas>
			</div>
             </div>
		</div>
   </div>
</div>
<script>
var stats = {!! json_encode($stats->toArray()) !!};
var cal_stats = {!! json_encode($calories->toArray()) !!};


let myChart = document.getElementById('myChart').getContext('2d');

var gradientStroke = myChart.createLinearGradient(0, 0, 0, 600);
var gradientFill = myChart.createLinearGradient(500, 0, 100, 0);

gradientStroke.addColorStop(0, "rgb(144, 89, 140)");
gradientStroke.addColorStop(1, "white");

gradientFill.addColorStop(1, "rgb(144, 89, 140, 0.6)");
gradientFill.addColorStop(0, "rgb(144, 89, 140, 0.4)");

let calChart = new Chart(myChart, {
	type:'line',
	data:{
		labels:stats,
		datasets:[{
			label:'Kalorija',
			data:cal_stats,
			backgroundColor:gradientStroke,
			pointHoverBorderColor: "#33c07f",
			pointHoverBackgroundColor: "#33c07f",
			pointBorderWidth: 8,
			pointHoverRadius: 6,
			borderColor:gradientFill,
			pointRadius: 3,



		}]
	},
	options:{
		legend:{
			display:false
		},
		scales: {
			yAxes: [{
				display:true,
				scaleLabel:{
					display:true,
					labelString:'Kalorija',
					fontSize:17, 
					fontColor: "#2C3E50"
				},
                ticks: {
                    fontColor: "rgba(0,0,0,0.5)",
                    fontStyle: "bold",
                    beginAtZero: true,
                    maxTicksLimit: 5,
                    padding: 10,
                    max:5000
                },
                gridLines: {
                    drawTicks: false,
                    display: false
                }

			}],
			xAxes: [{
				display:true,
				scaleLabel:{
					display:true,
					labelString:'Dan',
					fontSize:17,
					fontColor: "#2C3E50"
				},
				ticks:{
					 
					 padding: 10
				},
				gridLines:{
					display: false
				}
			}],

		}

	}
});
</script>
@endsection