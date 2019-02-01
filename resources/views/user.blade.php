@extends('layouts.app')

@section('content')
 <div id="page-content-wrapper" class="col-lg-7">
    <div class="header">
      
      <h1 class="p-title">Korisnički podaci</h1>
      <hr> 
    </div>
   
   <div class="form-wrapper">
   	    {{Form::open(['route' => ['user.submit']])}}
   	  
      <div class="form-group">
        {{ Form::label('tezina', 'Težina:')}}
        {{ Form::number('tezina', ($user->weight>0) ? $user->weight : '', ['class' => 'form-control' , 'placeholder' => 'Unesite težinu', 'step'=>'any', 'required'])}}
       
      </div>
      <div class="form-group">
        {{ Form::label('visina', 'Visina:')}}
        {{ Form::number('visina', ($user->height>0) ? $user->height : '', ['class' => 'form-control' , 'placeholder' => 'Unesite visinu', 'step'=>'any', 'required'])}}
     
      </div>
      <div class="form-group">

        {{ Form::label('godine', 'Godine:')}}
        {{ Form::number('godine',($user->years>0) ? $user->years : '', ['class' => 'form-control' , 'placeholder' => 'Unesite godine', 'required'])}}
     
      </div>
      <div class="form-group">
      
        <legend class="col-form-label ml-1">Rod:</legend>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          
            <label class="btn btn-secondary active">
           {{ Form::radio('option', 'M', true)}}
            Muški</label>
          
          <label class="btn btn-secondary">
           {{ Form::radio('option', 'Z' )}}
            Ženski
          </label>
        </div>
   </div>
    <div class="form-group">
      
        <legend class="col-form-label ml-1">Vrsta jelovnika:</legend>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          
            <label class="btn btn-secondary active">
           {{ Form::radio('type', '1', true)}}
            Obični</label>
          
          <label class="btn btn-secondary">
           {{ Form::radio('type', '2' )}}
            Dijetni
          </label>

           <label class="btn btn-secondary">
           {{ Form::radio('type', '3' )}}
            Makrobiotičarski
          </label>

           <label class="btn btn-secondary">
           {{ Form::radio('type', '4' )}}
            Bezglutenski
          </label>

           <label class="btn btn-secondary">
           {{ Form::radio('type', '5' )}}
            Vegeterijanski
          </label>
        </div>
   </div>
   <div class="col-auto form-i d-flex justify-content-center"">
    @if(Auth::User()->weight>0)
   	{{Form::submit('Ažuriraj!', ['class' => 'btn btn-default mb-2'])}}
    @else
    {{Form::submit('Unesi!', ['class' => 'btn btn-default mb-2'])}}
    @endif
   </div>
  {!! Form::close() !!}
  </div>

 </div>
      
        <div class="col-lg-4 nopadding h-100">
          <div id="img-wrapper">
            <img src="img/workout.jpg">
          </div>
        </div>

@endsection