@extends('layouts.user_layout.user_layout')


@section('title')
 Contacto
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

 

<div id="contacto">


  <!--para agregar los márgenes laterales-->
  <div class="container-fluid section-wrapper no-padding bgcolor-3light">

    <div class="row special-col no-padding no-margin">



      <div class="col-md-8 col-md-push-2 super-space-top super-space-bottom">
        <h1 class="text-center">Ponte en contacto</h1>
        <h2 class="text-center quote super-space-bottom">Una frase aquí, de no más de un renglón de longitud.</h2>
            {{-- rombo divisor con el logo de GT --}}
            <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>
      </div> 



      <div class="col-sm-6 special-col">
        <div class="table-outer">
          <div class="table-inner">

            <h1 class="text-center space-bottom">Comunícate directamente</h1>

            @if($Empresa->telefono != null) 
            <p><span class="glyphicon glyphicon-earphone color-3dark"></span> {{$Empresa->telefono}}</p>
            @endif

            @if($Empresa->celular != null)
            <p><span class="glyphicon glyphicon-phone color-3dark"></span> {{$Empresa->celular}}</p>
            @endif

            @if($Empresa->email != null)
            <p><span class="glyphicon glyphicon-envelope color-3dark"></span> {{$Empresa->email}}</p>
            @endif

            @if($Empresa->direccion != null) 
            <p><span class="glyphicon glyphicon-map-marker color-3dark"></span> {{$Empresa->direccion}}</p>
            @endif

            @if($Empresa->horarios_dias != null)
            <p><span class="glyphicon glyphicon-time color-3dark"></span> {{$Empresa->horarios_dias}}</p>
            @endif

          </div>
        </div>
      </div>



      <div class="col-sm-6 special-col">
        <div class="table-outer">
          <div class="table-inner">

            <h1 class="text-center space-bottom">Síguenos en las redes</h1>

            @if($Empresa->telefono != null) 
            <p><span class="glyphicon glyphicon-phone color-3dark"></span> {{$Empresa->telefono}}</p>
            @endif

            @if($Empresa->celular != null)
            <p><span class="glyphicon glyphicon-phone color-3dark"></span> {{$Empresa->celular}}</p>
            @endif

            @if($Empresa->email != null)
            <p><span class="glyphicon glyphicon-phone color-3dark"></span> {{$Empresa->email}}</p>
            @endif

            @if($Empresa->direccion != null) 
            <p><span class="glyphicon glyphicon-phone color-3dark"></span> {{$Empresa->direccion}}</p>
            @endif

            @if($Empresa->horarios_dias != null)
            <p><span class="glyphicon glyphicon-phone color-3dark"></span> {{$Empresa->horarios_dias}}</p>
            @endif
            
          </div>
        </div>
      </div>



      <div class="col-sm-12 special-col">
        <div class="table-outer">
          <div class="table-inner">

            <h1 class="text-center space-top space-bottom">...o bien, escríbenos ahora mismo</h1>

            @include('formularios.contacto_form')
            
          </div>
        </div>
      </div> 



    </div>
  </div>
</div>


@stop