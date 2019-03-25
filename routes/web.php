<?php
use Illuminate\Http\Request;
use App\Prestadore;
use App\Itinerario;
use App\Turista;
use App\Paquete;
use App\Foto;
use App\Zona;
use App\Atractivo;
use App\Plane;
use App\Registro;
use Conner\Tagging\Providers\TaggingServiceProvider;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get("/inicio","MiController@index");
Route::get("/phpinfo","MiController@phpinfo");

Route::get("/actividad","MiController@activity");
Route::get("/galeria","MiController@fotos");
Route::get("/mostrar","MiController@show");

Route::get("/contacto","MiController@contactar");
Route::post("/contacto", "MiController@guardarContactar");

Route::get("/Contactos","MiController@contacto");
Route::get('/Contactos/{note}/borrar', 'MiController@eliminarContacto');
Route::delete('/Contactos/{note}', 'MiController@borrarContacto');
Route::get("/Contactos/suspender","MiController@csuspender");
Route::get("/Contactos/suspender/{suspe}/{id}/Restaurar", "MiController@suspenderContacto");
Route::get("/Contactos/suspender/{suspe}/{id}/Borrar", "MiController@deleteContacto");
Route::get('/Contactos/{note}/informacion', 'MiController@informacionContacto');

Route::get("/inicio","MiController@home");
Route::get("/guia1","MiController@perfil");

Route::get("/servicios","MiController@listas");

Route::get("/servicios/{note}/prestador","MiController@servicios");

Route::get("/servicios/{note}/prestador/galeria","MiController@serviciosGaleria");
Route::post("/servicios/{note}/prestador/galeria", 'MiController@guardarFoto');

Route::patch('/servicios/{note}/prestador/galeria/{notes}/editar', 'MiController@actualizarFoto');
Route::get('/servicios/{note}/prestador/galeria/{notes}/editar', 'MiController@editarFoto');

Route::get("/servicios/{note}/prestador/galeria/{notes}/borrar","MiController@eliminarFoto");
Route::delete("/servicios/{note}/prestador/galeria/{notes}/borrar", 'MiController@borrarFoto');
Route::get("/servicios/{note}/prestador/galeria/suspender", 'MiController@Fotosuspender');
Route::get("/servicios/{note}/prestador/galeria/suspender/{suspe}/{id}/Restaurar", "MiController@suspenderFoto");
Route::get("/servicios/{note}/prestador/galeria/suspender/{suspe}/{id}/Borrar", "MiController@deleteFoto");

Route::get("/servicios/{note}/prestador/configuracion","MiController@editarPrestador");
Route::patch("/servicios/{note}/prestador/configuracion", 'MiController@actualizarPrestador');

Route::get("/servicios/{note}/prestador/itinerarios","MiController@itinerario");
Route::post("/servicios/{note}/prestador/itinerarios","MiController@guardarItinerario");

Route::get("/servicios/{note}/prestador/itinerarios/{notes}/editar","MiController@editarItinerario");
Route::patch('/servicios/{notes}',"MiController@actualizarItinerario");

Route::get("/servicios/{note}/prestador/itinerarios/{notes}/borrar","MiController@eliminarItinerario");
Route::delete("/servicios/{note}/prestador/itinerarios/{notes}/borrar", 'MiController@borrarItinerario');
Route::get("/servicios/{note}/prestador/itinerarios/suspender", 'MiController@Itinerariosuspender');
Route::get("/servicios/{note}/prestador/itinerarios/suspender/{suspe}/{id}/Restaurar", "MiController@suspenderItinerario");
Route::get("/servicios/{note}/prestador/itinerarios/suspender/{suspe}/{id}/Borrar", "MiController@deleteItinerario");

Route::get("/servicios/{note}/prestador/comentarios","MiController@serviciosComentarios");



Route::get("/listaz","MiController@zonas");
Route::get("/listaz/{note}/zona","MiController@infozona1");

Route::get("/ListaAtractivo","MiController@ListaAtractivo");
Route::get("/ListaAtractivo/{note}/Atractivo","MiController@Atractivo");

Route::get("/nosotros","MiController@quienes");




Route::get("/perfil", "ControladorTablas@perfil");
Route::post("/perfil", "ControladorTablas@perfilActualizar");


//INICIO RUTAS PRESTADOR
Route::get("/Prestador","ControladorTablas@prestador");
Route::post('/prestador', 'ControladorTablas@guardarPrestador');
Route::patch('/Prestador/{note}', 'ControladorTablas@actualizarPrestador');
Route::get('/Prestador/{note}/editar', 'ControladorTablas@editarPrestador');
Route::get('/Prestador/{note}/borrar', 'ControladorTablas@eliminarPrestador');
Route::delete('/Prestador/{note}', 'ControladorTablas@borrarPrestador');
Route::get("/Prestador/suspender","ControladorTablas@psuspender");
Route::get("/Prestador/suspender/{suspe}/{RIF}/Restaurar", "ControladorTablas@suspenderPrestador");
Route::get("/Prestador/suspender/{suspe}/{RIF}/Borrar", "ControladorTablas@deletePrestador");
//FINAL RUTAS PRESTADOR

//INICIO RUTAS ITINERARIO
Route::get("/Itinerario","ControladorTablas@itinerario");
Route::post('/itinerario', 'ControladorTablas@guardarItinerario');
Route::patch('/Itinerario/{note}', 'ControladorTablas@actualizarItinerario');
Route::get('/Itinerario/{note}/editar', 'ControladorTablas@editarItinerario');
Route::get('/Itinerario/{note}/borrar', 'ControladorTablas@eliminarItinerario');
Route::delete('/Itinerario/{note}', 'ControladorTablas@borrarItinerario');
Route::get("/Itinerario/suspender","ControladorTablas@isuspender");
Route::get("/Itinerario/suspender/{suspe}/{id}/Restaurar", "ControladorTablas@suspenderItinerario");
Route::get("/Itinerario/suspender/{suspe}/{id}/Borrar", "ControladorTablas@deleteItinerario");
//FINAL RUTAS ITINERARIO

//INICIO RUTAS TURISTA
Route::get("/Turista","ControladorTablas@turista");
Route::post('/turista', 'ControladorTablas@guardarTurista');
Route::patch('/Turista/{note}', 'ControladorTablas@actualizarTurista');
Route::get('/Turista/{note}/editar', 'ControladorTablas@editarTurista');
Route::get('/Turista/{note}/borrar', 'ControladorTablas@eliminarTurista');
Route::delete('/Turista/{note}', 'ControladorTablas@borrarTurista');
Route::get("/Turista/suspender","ControladorTablas@tsuspender");
Route::get("/Turista/suspender/{suspe}/{id}/Restaurar", "ControladorTablas@suspenderTurista");
Route::get("/Turista/suspender/{suspe}/{id}/Borrar", "ControladorTablas@deleteTurista");
//FINAL RUTAS TURISTA

//INICIO RUTAS PAQUETE
Route::get("/Paquete","ControladorTablas@paquete");
Route::post('/paquete', 'ControladorTablas@guardarPaquete');
Route::patch('/Paquete/{note}', 'ControladorTablas@actualizarPaquete');
Route::get('/Paquete/{note}/editar', 'ControladorTablas@editarPaquete');
Route::get('/Paquete/{note}/borrar', 'ControladorTablas@eliminarPaquete');
Route::delete('/Paquete/{note}', 'ControladorTablas@borrarPaquete');
Route::get("/Paquete/suspender","ControladorTablas@Paquetesuspender");
Route::get("/Paquete/suspender/{suspe}/{id}/Restaurar", "ControladorTablas@suspenderPaquete");
Route::get("/Paquete/suspender/{suspe}/{id}/Borrar", "ControladorTablas@deletePaquete");
//FINAL RUTAS PAQUETE

//INICIO RUTAS FOTO
Route::get("/Foto","ControladorTablas@foto");
Route::post('/foto', 'ControladorTablas@guardarFoto');
Route::patch('/Foto/{note}', 'ControladorTablas@actualizarFoto');
Route::get('/Foto/{note}/editar', 'ControladorTablas@editarFoto');
Route::delete('/Foto/{note}', 'ControladorTablas@borrarFoto');
//FINAL RUTAS FOTO

//INICIO RUTAS ZONA
Route::get("/Zona","ControladorTablas@zona");
Route::post('/zona', 'ControladorTablas@guardarZona');
Route::patch('/Zona/{note}', 'ControladorTablas@actualizarZona');
Route::get('/Zona/{note}/editar', 'ControladorTablas@editarZona');
Route::get('/Zona/{note}/borrar', 'ControladorTablas@eliminarZona');
Route::delete('/Zona/{note}', 'ControladorTablas@borrarZona');
Route::get("/Zona/suspender","ControladorTablas@Zonasuspender");
Route::get("/Zona/suspender/{suspe}/{id}/Restaurar", "ControladorTablas@suspenderZona");
Route::get("/Zona/suspender/{suspe}/{id}/Borrar", "ControladorTablas@deleteZona");
//FINAL RUTAS ZONA

//INICIO RUTAS ATRACTIVO
Route::get("/Atractivo","ControladorTablas@atractivo");
Route::post('/atractivo', 'ControladorTablas@guardarAtractivo');
Route::patch('/Atractivo/{note}', 'ControladorTablas@actualizarAtractivo');
Route::get('/Atractivo/{note}/editar', 'ControladorTablas@editarAtractivo');
Route::get('/Atractivo/{note}/borrar', 'ControladorTablas@eliminarAtractivo');
Route::delete('/Atractivo/{note}', 'ControladorTablas@borrarAtractivo');
Route::get("/Atractivo/suspender","ControladorTablas@Atractivosuspender");
Route::get("/Atractivo/suspender/{suspe}/{id}/Restaurar", "ControladorTablas@suspenderAtractivo");
Route::get("/Atractivo/suspender/{suspe}/{id}/Borrar", "ControladorTablas@deleteAtractivo");
//FINAL RUTAS ATRACTIVO

//INICIO RUTAS PLANES
Route::get("/Plane","ControladorTablas@plane");
Route::post('/plane', 'ControladorTablas@guardarPlane');
Route::patch('/Plane/{note}', 'ControladorTablas@actualizarPlane');
Route::get('/Plane/{note}/editar', 'ControladorTablas@editarPlane');
Route::get('/Plane/{note}/borrar', 'ControladorTablas@eliminarPlane');
Route::delete('/Plane/{note}', 'ControladorTablas@borrarPlane');
Route::get("/Plane/suspender","ControladorTablas@Planesuspender");
Route::get("/Plane/suspender/{suspe}/{id}/Restaurar", "ControladorTablas@suspenderPlane");
Route::get("/Plane/suspender/{suspe}/{id}/Borrar", "ControladorTablas@deletePlane");
//FINAL RUTAS PLANES

//INICIO RUTAS ACTIVIDADES
Route::get("/actividades","ControladorTablas@actividad");
Route::post('/actividades', 'ControladorTablas@guardarActividad');
Route::patch('/actividades/{note}', 'ControladorTablas@actualizarActividad');
Route::get('/actividades/{note}/editar', 'ControladorTablas@editarActividad');
Route::get('/actividades/{note}/borrar', 'ControladorTablas@eliminarActividad');
Route::delete('/actividades/{note}', 'ControladorTablas@borrarActividad');
Route::get("/actividades/suspender","ControladorTablas@Actividadsuspender");
Route::get("/actividades/suspender/{suspe}/{id}/Restaurar", "ControladorTablas@suspenderActividad");
Route::get("/actividades/suspender/{suspe}/{id}/Borrar", "ControladorTablas@deleteActividad");
//FINAL RUTAS ACTIVIDADES

//INICIO RUTAS LOGIN
Route::get("/Logo","ControladorTablas@logo");
Route::post('/logo', 'ControladorTablas@guardarLogo');
//FINAL RUTAS LOGIN

//INICIO RUTAS REGISTRO
Route::get("/Registro","ControladorTablas@registro");
Route::post('/registro', 'ControladorTablas@guardarRegistro');
//FINAL RUTAS REGISTRO


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Guardar imagenes

Route::get('/formulario', 'StorageController@index');

Route::post('/formulario', 'StorageController@save');

Route::get('storage/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

});


Route::get('addpost','PostController@create');
Route::post('addpost','PostController@store');
Route::get('post','PostController@index');
