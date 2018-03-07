<?php 

namespace App\Repositorios;

use App\Entidades\Marca_de_evento;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class Marca_de_eventoRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Marca_de_evento();
  }

  //guetters/////////////////////////////////////////////////////////////////////

  public function crearNuevaMarcaDeEvento($id_evento,$id_marca)
  {
    $Marca_Evento = $this->getEntidad();
    $Marca_Evento->marca_id  = $id_marca;
    $Marca_Evento->evento_id = $id_evento;
    $Marca_Evento->save();
  }

  public function getMarca_de_eventoDeEstaMarca($id_marca)
  {
    return $this->getEntidad()->where('marca_id',$id_marca)->get();
  }

   public function getEventosDeEstaMarcaActivosYPaginados($atributo,$valor_atributo,$orden,$paginacion)
    {
        $coleccion = $this->entidad
                          ->where($atributo,$valor_atributo)  
                          ->get();

        //filtro las que no estan activas                      
        foreach($coleccion as $item)  
        {
          if($item->evento->estado != 'si')
          {
            $coleccion->forget($item->id);
          }
        }    

        return   $coleccion->orderBy('id',$orden)
                           ->paginate($paginacion);
    }


  //setters//////////////////////////////////////////////////////////////////////

 
  
 


  
}