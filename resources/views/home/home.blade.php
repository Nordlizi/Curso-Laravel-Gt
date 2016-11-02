@extends('layouts.user_layout.user_layout')


@section('title')
 Home Ernesto
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 {{-- imagenes en grande --}}
 @include('home.partes.imagen_de_portada')

 <!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="section-wrapper-welcome">
    <div class="row">    
      <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

     {{-- la parte de bienvenidad --}}
     @include('home.partes.datos_bienvenida')

      </div>
    </div>  
  </div>
</div>

 <!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

     {{-- la parte de los globitos --}}
     @include('home.partes.globitos')

    </div>  
  </div>
</div>

 <!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

     {{-- la parte de proyectos  --}}
     @include('home.partes.proyectos')


    </div>  
  </div>
</div>

 <!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

     {{-- la parte de publicaciones  --}}
     @include('home.partes.publicaciones')


    </div>  
  </div>
</div>

@stop