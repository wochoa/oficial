<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paginasweb;
use App\Http\Controllers\procompite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
route::get('/menus',[Paginasweb::class,'menus'])->name('menus');
route::get('/pagina/{id}',[Paginasweb::class,'pagina'])->name('pagina');
route::get('/convocatorias',[Paginasweb::class,'convocatorias'])->name('convocatorias');
route::get('/noticiasini',[Paginasweb::class,'noticiasini'])->name('noticiasini');
route::get('/videosini',[Paginasweb::class,'videosini'])->name('videosini');
route::get('enlace_refe',[Paginasweb::class,'enlacerefe'])->name('enlacerefe');//secciones
route::get('secciones',[Paginasweb::class,'secciones'])->name('secciones');
route::get('allnoticias',[Paginasweb::class,'allnoticias'])->name('allnoticias');//allnoticias
route::get('noticias/{id}',[Paginasweb::class,'detnoticias'])->name('detnoticias');
route::get('visitas',[Paginasweb::class,'visitas'])->name('visitas');
route::get('buscarvisita/{bus}',[Paginasweb::class,'buscarvisita'])->name('buscarvisita');
route::get('listapopup',[Paginasweb::class,'listapopup'])->name('listapopup');
route::get('/normatividad/{text?}/{anio?}/{siglas?}/{descripcion?}/{bus?}',[Paginasweb::class,'normatividad'])->name('normatividad');

route::get('tipodoc',[Paginasweb::class,'tipodoc'])->name('tipodoc');
route::get('regulations',[Paginasweb::class,'regulations'])->name('regulations');


route::get('directorio/{dir?}',[Paginasweb::class,'directorio'])->name('directorio');//directorio

route::get('organigrama',[Paginasweb::class,'organigrama'])->name('organigrama');
route::get('unidad/{cod?}',[Paginasweb::class,'unidad'])->name('unidad');
route::get('fag',[Paginasweb::class,'fag'])->name('fag');
route::get('slider',[Paginasweb::class,'slider'])->name('slider');

// temas
route::get('tema',[Paginasweb::class,'tema'])->name('tema');

// PROCOMPITE

route::get('provincia',[procompite::class,'provincia'])->name('provincia');
route::get('distrito/{id}',[procompite::class,'distrito'])->name('distrito');//
route::get('cadenaspro/{id}',[procompite::class,'cadenaspro'])->name('cadenaspro');

route::post('addprocompite',[procompite::class,'addprocompite'])->name('addprocompite');
route::get('regprocompite/{ruc}',[procompite::class,'regprocompite'])->name('regprocompite');

/// cargo procompite
route::get('rotulo/{id}',[procompite::class,'rotulo'])->name('rotulo');
