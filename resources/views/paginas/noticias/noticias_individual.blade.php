@extends('layouts.user_layout.user_layout')


@section('title')
 Publicación Individual
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

    	  <div class="page-header">
        	<h1>{{$Noticia->name}}</h1>
      	</div>

      	<!--primera parte (foto a la izquierda y texto a la derecha)-->
      	<div class="row space-bottom">
      		<div class="col-md-6">
      			<h2>{{$Noticia->header_text}}</h2>
      		</div>
      		<div class="col-md-6">
			    	<img class="img-responsive img-rounded" src="{{$Noticia->url_img}}">
      		</div>
      	</div>


      	<!--primera parte (foto a la izquierda y texto a la derecha)-->
      	<div class="row space-bottom">
      		<div class="col-md-12">
      			<p>
             {{$Noticia->description}}.
            </p>
      		</div>
      	</div>

       
        	<!--otra imagen de la noticia-->
        	<div class="row space-bottom">
  	      	<div class="col-md-12">
  			    	<img class="img-responsive img-rounded" src="">
  	      	</div>
        	</div>
       

        @if($Noticia->url_video != NULL)
        	<!--video de la noticia-->
        	<div class="row space-bottom">
    		    <div class="col-md-12">
    		      	<div class="embed-responsive embed-responsive-16by9">
    		    		  <iframe class="embed-responsive-item" src="{{$Noticia->url_video}}"></iframe>
    				    </div>
  		    	</div>
  		    </div>
        @endif

    </div>  
  </div>
</div>

@stop