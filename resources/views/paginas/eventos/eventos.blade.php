@extends('layouts.user_layout.user_layout')


@section('title')
 Eventos
@stop

@section('MetaContent')
  Eventos y promociones de Global Target
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

 



    <div id="eventos">
    
    


<!--para agregar los márgenes laterales-->
<div class="section-wrapper bg-eventos-header" id="eventos-header">
  <div class="container-fluid">
    <div class="row super-space-bottom space-top">
        <div class="col-md-8 col-md-push-3 col-lg-8 col-lg-push-2">


        <div class="row super-space-bottom">
          <div class="col-sm-6 col-sm-push-6">
            <h1 class="section-title">Galería</h1>
            <h2 class="section-subtitle">Acciones y eventos destacados</h2>
            <div class="section-text">
              <h3>Reseñas e imágenes de acciones promocionales y eventos transcurridos a lo largo de estos 15 años de crecimiento en conjunto con nuestros clientes.</h3>
            </div>
          </div>
        </div>

        <div class="row super-space-bottom hidden-xs">
          <div class="col-sm-6 col-sm-push-6 space-bottom">
          </div>
        </div>



<!--fin de los márgenes laterales-->
       </div> <!--/ fin de la col-->
    </div> <!--/ fin del row-->
  </div>
</div>





<!--para agregar los márgenes laterales-->
<div class="container-fluid no-padding section-wrapper" id="eventos-listado">
	{{-- rombo divisor con el logo de GT --}}
	<div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>

	<div class="row hr-border-top-pegado">

			{{-- for each... insertar aquí las entidades --}}
	    @foreach($Eventos as $Evento)
	     @include('paginas.eventos.entidad_evento_para_listado')
	    @endforeach


		<!-- pagination -->
	    <div class="col-xs-12 special-col">
			<div class="row">
				<div class="">
					
						<h5 class="ampliar text-center">aqui ira la paginacion</h5>
									
				</div>
			</div>
		</div>

 	</div>

</div>



   </div> 


  
@stop