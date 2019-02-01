@extends('layouts.app')

@section('content')

   <div id="page-content-wrapper-w">
         <div class="header">
          
          <h1 class="p-title">Moje vježbe</h1>
          <hr> 
        </div>
        <div class="work-wrapper d-flex flex-column justify-content-center">
           <a href="{{ route('user.workout.upper') }}">
            <div class="row no-gutters justify-content-center w1-p">

              <div class="col-md-8 nopadding"> 

                <div class="pic-wrapper">
                  <img src="img/workout1.png">
                </div>
              </div>
              <div class="col-md-4 nopadding w1 d-flex flex-column justify-content-center align-items-center">
                 <h5>Vježbe za gornji dio tijela</h5>
                <hr>
                  <p>Vježbe za ramena, prsa, leđa i ruke</p>
              </div>
            </div>
          </a>
            <a href="{{ route('user.workout.lower') }}">
             <div class="row no-gutters justify-content-center w1-p">
              
              <div class="col-md-4 nopadding w2 d-flex flex-column bd-highlight justify-content-center align-items-center">
                <h5>Vježbe za donji dio tijela</h5>
                 <hr>
                <p>Vježbe za ramena, prsa, leđa i ruke</p>
              </div>

              <div class="col-md-8 nopadding">
                <div class="pic-wrapper">
                  <img src="img/workout2.png">
                </div>
              </div>
              
            </div>
          </a>
        </div>
          </div>
@endsection