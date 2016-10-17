<?php 

require __DIR__ . '/Empresa/Rutas_Empresa.php';

require __DIR__ . '/Users/Rutas_Users.php';

require __DIR__ . '/Marcas/Rutas_Marcas.php';

require __DIR__ . '/Home/Rutas_Home.php';



//Ruta de Home
Route::get('/' , [
                    
                    'uses' => 'Publicas\Home_Controller@get_home',
                    'as'   => 'home']
          );