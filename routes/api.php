<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
 //   return $request->user();
//});

Route::apiResource('cargo','CargoController');
Route::apiResource('categoria','CategoriaController');
Route::apiResource('color','ColorController');
Route::apiResource('comprobanteentrada','ComprobanteEntradaController');
Route::apiResource('comprobanteventa','ComprobanteVentaController');
Route::apiResource('detalleentrada','DetalleEntradaController');
Route::apiResource('detallepedido','DetallepedidoController');
Route::apiResource('documento','DocumentoController');
Route::apiResource('empleado','EmpleadoController');
Route::apiResource('entrada','EntradaController');
Route::apiResource('horario','HorarioController');
Route::apiResource('horarioempleado','HorarioEmpleadoController');
Route::apiResource('imagen','ImagenController');
Route::apiResource('marca','MarcaController');
Route::apiResource('mediopago','MediopagoController');
Route::apiResource('modelo','ModeloController');
Route::apiResource('oferta','OfertaController');
Route::apiResource('pedido','PedidoController');
Route::apiResource('pregunta','PreguntaController');
Route::apiResource('producto','ProductoController');
Route::apiResource('proveedor','ProveedorController');
Route::apiResource('sexo','SexoController');
Route::apiResource('talla','TallaController');
Route::apiResource('tipooferta','TipoOfertaController');
Route::apiResource('venta','VentaController');