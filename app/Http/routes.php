<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
  'uses' => 'HomeController@homeView',
  'as' => 'show_home_path',
]);

Route::get('/Reservas', [
  'uses' => 'HomeController@reservaView',
  'as' => 'show_reserva_path',
]);

Route::get('/Contacto', [
  'uses' => 'HomeController@contactoView',
  'as' => 'show_contacto_path',
]);

Route::get('/Blog', [
  'uses' => 'HomeController@blogView',
  'as' => 'show_blog_path',
]);

Route::get('/Nosotros', [
  'uses' => 'HomeController@nosotrosView',
  'as' => 'show_nosotros_path',
]);

Route::get('/ConsultaVuelo', [
  'uses' => 'HomeController@consultavueloView',
  'as' => 'show_vuelo_path',
]);

Route::get('/Blog/Equipaje', [
  'uses' => 'HomeController@blogViajeView',
  'as' => 'show_equipaje_path',
]);

Route::get('/Blog/Tips', [
  'uses' => 'HomeController@blogTipsView',
  'as' => 'show_tips_path',
]);

Route::get('/Blog/Consejos', [
  'uses' => 'HomeController@blogconsejosView',
  'as' => 'show_consejo_path',
]);

Route::get('/Blog/Aeropuerto', [
  'uses' => 'HomeController@blogaeropuertoView',
  'as' => 'show_aeropuerto_path',
]);

Route::get('/MapaSitio', [
  'uses' => 'HomeController@mapaView',
  'as' => 'show_mapa_path',
]);


Route::post('/Reservas/SolicitarReservar', [
  'uses' => 'ReservasController@guardar',
  'as' => 'save_reserva_path',
]);

Route::post('/Newsletter', [
  'uses' => 'ReservasController@enviarEmailNew',
  'as' => 'send_new_path',
]);

Route::post('/Contacto/Email', [
  'uses' => 'ReservasController@enviarEmail',
  'as' => 'send_email_path',
]);

Route::post('/Email', [
  'uses' => 'ReservasController@enviarEmailNew',
  'as' => 'send_emailnew_path',
]);
