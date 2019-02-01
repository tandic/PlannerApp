@extends('layouts.app')

@section('content')
   <div id="page-content-wrapper" class="col-lg-9">
            <div class="header">
              
                <h1 class="p-title">Moj Planer</h1>
                <hr> 
            </div>
            <div class="content-p">
              <div class="row">
                <div class="col-md-9">
             @if(session('status'))
              
            <div id="success-alert" class="card border-success mb-3">
              <div class="card-body text-success">
                <p class="card-text">{{session('status')}}</p>
              </div>
            </div>
              @endif
               <div class="card border-light">
               @if(!empty($stat))
                @if($stat->breakfast == false||$stat->lunch == false||$stat->dinner == false)
               <div class="card-header">
                  Dobar napredak!
                </div>
                <div class="card-body">
                  <p class="card-text">Za pregled ostatka današnjeg menija kliknite na gumb.</p>
                  <a href="{{ route('user.menu') }}" class="btn btn-default float-right">Otvori jelovnik</a>
                </div>
                @else
                <div class="card-header">
                  Izvršeno!
                </div>
                <div class="card-body">
                  <p class="card-text">Kako bi pregledali ukupni napredak kliknite na gumb!</p>
                  <a href="{{ route('user.progress') }}" class="btn btn-default float-right">Prikaži napredak</a>
                </div>
                @endif
                @elseif(Auth::User()->weight>0)
                 <div class="card-header">
                  Započnite!
                </div>
                <div class="card-body">
                  <p class="card-text">Vaš današnji meni je spreman i možete ga pregledati klikom na gumb.</p>
                  <a href="{{ route('user.menu') }}" class="btn btn-default float-right">Otvori jelovnik</a>
                </div>
                @else
                 <div class="card-header">
                  Dobrodošli, {{Auth::User()->name}}! 
                </div>
                <div class="card-body">
                  <p class="card-text">Kako bi počeli koristiti servis potrebni su nam vaši podaci. Kliknite na gumb kako bi započeli sa unosom podataka!</p>
                  <a href="{{ route('user') }}" class="btn btn-default float-right">Unesi podatke</a>
                </div>
                @endif
              </div>
              </div>
              <div class="col-md-3">

              </div>
            </div>

        </div>
      </div>
        <div class="col-lg-2 nopadding">
          <div id="calendar-wrapper" class="d-flex flex-column bd-highlight justify-content-center">

               <div class="bd-highlight nopadding">
                 <div class="card d-flex border-light">
                  <div class="card-header border-light">Datum</div>
                   <div class="card-body d-flex justify-content-center flex-column">
                    <p class="align-self-center" style="font-size:25px" id="dayName">PETAK</p>
                    <p class="align-self-center" style="font-size:55px" id="day">1</p>
                   </div>
                  </div>
                 </div>

                 <div class="bd-highlight nopadding">
                 <div class="card border-dark bg-dark">
                   <div class="card-body">
                    <canvas id="myChart"></canvas>
                  </div>
                 </div>
               </div>

                 <div id="app" class="bd-highlight nopadding">
                    <calendar></calendar>
                 </div>
                 <div class="bd-highlight nopadding img-c">
                   <!-- <img src="img/LogoGShort.png"> -->
                 </div>
          </div>
        </div>
        <script> 

Chart.helpers.drawRoundedTopRectangle = function(ctx, x, y, width, height, radius) {
  ctx.beginPath();
  ctx.moveTo(x + radius, y);
  // top right corner
  ctx.lineTo(x + width - radius, y);
  ctx.quadraticCurveTo(x + width, y, x + width, y + radius);
  // bottom right   corner
  ctx.lineTo(x + width, y + height);
  // bottom left corner
  ctx.lineTo(x, y + height);
  // top left   
  ctx.lineTo(x, y + radius);
  ctx.quadraticCurveTo(x, y, x + radius, y);
  ctx.closePath();
};

Chart.elements.RoundedTopRectangle = Chart.elements.Rectangle.extend({
  draw: function() {
    var ctx = this._chart.ctx;
    var vm = this._view;
    var left, right, top, bottom, signX, signY, borderSkipped;
    var borderWidth = vm.borderWidth;

    if (!vm.horizontal) {
      // bar
      left = vm.x - vm.width / 2;
      right = vm.x + vm.width / 2;
      top = vm.y;
      bottom = vm.base;
      signX = 1;
      signY = bottom > top? 1: -1;
      borderSkipped = vm.borderSkipped || 'bottom';
    } else {
      // horizontal bar
      left = vm.base;
      right = vm.x;
      top = vm.y - vm.height / 2;
      bottom = vm.y + vm.height / 2;
      signX = right > left? 1: -1;
      signY = 1;
      borderSkipped = vm.borderSkipped || 'left';
    }

    // Canvas doesn't allow us to stroke inside the width so we can
    // adjust the sizes to fit if we're setting a stroke on the line
    if (borderWidth) {
      // borderWidth shold be less than bar width and bar height.
      var barSize = Math.min(Math.abs(left - right), Math.abs(top - bottom));
      borderWidth = borderWidth > barSize? barSize: borderWidth;
      var halfStroke = borderWidth / 2;
      // Adjust borderWidth when bar top position is near vm.base(zero).
      var borderLeft = left + (borderSkipped !== 'left'? halfStroke * signX: 0);
      var borderRight = right + (borderSkipped !== 'right'? -halfStroke * signX: 0);
      var borderTop = top + (borderSkipped !== 'top'? halfStroke * signY: 0);
      var borderBottom = bottom + (borderSkipped !== 'bottom'? -halfStroke * signY: 0);
      // not become a vertical line?
      if (borderLeft !== borderRight) {
        top = borderTop;
        bottom = borderBottom;
      }
      // not become a horizontal line?
      if (borderTop !== borderBottom) {
        left = borderLeft;
        right = borderRight;
      }
    }

    // calculate the bar width and roundess
    var barWidth = Math.abs(left - right);
    var roundness = this._chart.config.options.barRoundness || 0.5;
    var radius = barWidth * roundness * 0.5;

    // keep track of the original top of the bar
    var prevTop = top;

    // move the top down so there is room to draw the rounded top
    top = prevTop + radius;
    var barRadius = top - prevTop;

    ctx.beginPath();
    ctx.fillStyle = vm.backgroundColor;
    ctx.strokeStyle = vm.borderColor;
    ctx.lineWidth = borderWidth;

    // draw the rounded top rectangle
    Chart.helpers.drawRoundedTopRectangle(ctx, left, (top - barRadius + 1), barWidth, bottom - prevTop, barRadius);

    ctx.fill();
    if (borderWidth) {
      ctx.stroke();
    }

    // restore the original top value so tooltips and scales still work
    top = prevTop;
  },
});

Chart.defaults.roundedBar = Chart.helpers.clone(Chart.defaults.bar);

Chart.controllers.roundedBar = Chart.controllers.bar.extend({
  dataElementType: Chart.elements.RoundedTopRectangle
});


var stats = {!! json_encode($stats->toArray()) !!};
var cal_stats = {!! json_encode($calories->toArray()) !!};


let myChart = document.getElementById('myChart').getContext('2d');
let myDay = document.getElementById('dayName');
let myDayName = document.getElementById('day');

function getDayName(dateStr, locale)
{
    var date = new Date(dateStr);
    return date.toLocaleDateString(locale, { weekday: 'long' });        
}

var dateStr = new Date();
var day = getDayName(dateStr, "hr-HR")


myDay.innerHTML = day;
myDayName.innerHTML = dateStr.getDate();

var gradientStroke = myChart.createLinearGradient(0, 0, 0, 600);
var gradientFill = myChart.createLinearGradient(500, 0, 100, 0);

gradientStroke.addColorStop(0, "rgb(144, 89, 140)");
gradientStroke.addColorStop(1, "white");

gradientFill.addColorStop(1, "rgb(144, 89, 140, 0.6)");
gradientFill.addColorStop(0, "rgb(144, 89, 140, 0.4)");

let calChart = new Chart(myChart, {
  type:'roundedBar',
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
    responsive: true,
    barRoundness: 1,
    legend:{
      display:false
    },
   
    scales: {
      yAxes: [{
        display:false,
        scaleLabel:{
          display:false,
        },
                ticks: {
                    display:false,
                    beginAtZero: true,
                    maxTicksLimit: 5,
                    max:5000
                },
                gridLines: {
                    drawTicks: false,
                    display: false
                }

      }],
      xAxes: [{
        display:false,
        scaleLabel:{
          display:false
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
