<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;

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

Route::resource('/', ClassroomController::class)
    /**La ruta "index" es para crear formularios y mostrar todas las publicaciones
     * La ruta "store" para guardar nuevas publicaciones
     * La ruta "edit" mostrara el formulario para editar
     * La ruta "update" aceptara los datos y actualizara el Model
     * La ruta "destroy" elimina los datos
     * */

    ->only(['index', 'store', 'edit', 'update','destroy']);
    //El middleware "auth" sirve para garantizar que solo son usuarios registrados
    //EL middleware "verified" sirve para verificar el correo electronico
