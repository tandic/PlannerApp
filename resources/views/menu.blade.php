@extends('layouts.app')

@section('content')

        <div id="page-content-wrapper-j" class="col-lg-11">
            <div class="header">
               
                <h1 class="p-title"> Moj jelovnik <span>{{$time->formatLocalized('%e %B %Y')}}<span></h1>

                <hr> 
            </div>
            <div class="content-m">
              <div class="row">
                <div class="col-md-12 d-flex flex-column bd-highlight justify-content-center align-items-center">
                     
               <!--       
                  <div id="btns" class="d-flex flex-row bd-highlight mb-3">
                  <a href="#" class="btn active btn-default">Obični</a>
                  <a href="#" class="btn btn-default">Dijetni</a>
                  <a href="#" class="btn btn-default">Mikrobiotičarski</a>
                  <a href="#" class="btn btn-default">Bezglutenski</a>
                  <a href="#" class="btn btn-default">Vegeterijanski</a>
                </div>-->
          @if(count($meals) > 0)
            @if(!empty($stat))
             <div class="card border-light mb-3">
              <div class="card-body text-secondary">
               <div class="svg-wrapper">
                <svg id="gvs" width="100%" height="3" data-value="{{number_format($stat->datavalue, 0)}}" viewBox="0 0 1100 1" preserveAspectRatio="none">
                  <path class="bg" stroke="#F3F1FB" d="M0 2, 1100 2"></path>
                  <path class="meter" stroke="#22B573" d="M0 2, 1100 2" style="stroke-dasharray: 1100; stroke-dashoffset: 1100;"></path>
                </svg>
                <p>{{number_format($stat->datavalue, 0)}}%</p> 
                </div>
              </div>
             </div>
              @else
             <div id="prog" class="card border-light mb-3 d-none">
              <div class="card-body text-secondary">
               <div class="svg-wrapper">
                  <svg id="gvs" width="100%" height="3" data-value="0" viewBox="0 0 1100 1" preserveAspectRatio="none">
                    <path class="bg" stroke="#F3F1FB" d="M0 2, 1100 2"></path>
                  <path class="meter" stroke="#22B573" d="M0 2, 1100 2" style="stroke-dasharray: 1100; stroke-dashoffset: 1100;"></path>
                </svg>
                <p></p>
              </div>
                </div>
                  </div>
               @endif
            @endif
          
             @if(count($meals) > 0)
                @foreach($meals as $meal)
           @if(!empty($stat))
              @if($meal->type===1 && $stat->breakfast==true)
             <div class="card border-success">
              @elseif($meal->type===2 && $stat->lunch==true)
              <div class="card border-success">
              @elseif($meal->type===3 && $stat->dinner==true)
              <div class="card border-success">
              @else
              <div class="card border-light">
              @endif
           @else
              <div class="card border-light">
           @endif
                <div class="card-header"><b>
                @if($meal->type===1)Doručak
                 @elseif($meal->type===2)Ručak
                 @else Večera
                @endif </b><p class="float-right">{{$meal->calories }} Kalorija</p>
                </div>
                <div class="card-body">
                <div id="meal-wrapper"  class="d-flex bd-highlight mb-4">
                    <img src="img/meal1.jpg" alt="..." class="img-thumb">
                    <div class="d-flex flex-column">
                      <p><b>{{$meal->name }}</b></p>
                      <p class="card-text">{{$meal->description}}</p>
                    </div>
                </div>
                @if(!empty($stat))
                   @if($meal->type===1 && $stat->breakfast==true)<a href="{{$meal->id}}" class="btn btn-disabled float-right">Konzumirano</a>
                   @elseif($meal->type===2 && $stat->lunch==true)<a href="{{$meal->id}}" class="btn btn-disabled float-right">Konzumirano</a>
                   @elseif($meal->type===3 && $stat->dinner==true)<a href="{{$meal->id}}" class="btn btn-disabled float-right">Konzumirano</a>
                   @else  <a href="{{$meal->id}}" class="btn btn-default float-right">Konzumirano</a>
                @endif
                  @else  <a href="{{$meal->id}}" class="btn btn-default float-right">Konzumirano</a>
                 @endif
                </div>
              </div>
           
              @endforeach
          
               @else
            <div class="card border-danger w-50 p-3">
                <div class="card-header"><h5 >Nepostojeći podaci!</h5> </div>
                <div class="card-body">
                <div id="meal-wrapper"  class="d-flex bd-highlight mb-4">
                   <div class="d-flex flex-column">
                      <p><b></b></p>
                      <p class="card-text">Kako bi se generirao jelovnik po vašoj mjeri potrebni su nam vaši podaci. Kliknite na gumb kako bi započeli sa unosom podataka!</p>
                    </div>
                </div>
                <button onclick="location.href='{{ route('user') }}'" class="btn btn-default float-right">Unos podataka</button>
              </div>
            </div>
           @endif
            
             
              </div>
              
            </div>
        </div>
      </div>
@endsection