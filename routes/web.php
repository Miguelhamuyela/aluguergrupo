<?php

use Illuminate\Support\Facades\Route;

/* SITE */

Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);

/* Galeria fotos */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);

/* invitationcard  */
Route::get('/marcar-presenca/', ['as' => 'site.invitationcard', 'uses' => 'Site\InvitationcardController@index']);
Route::post('/marcar-presenca/store', ['as' => 'site.invitationcard.store', 'uses' => 'Site\InvitationcardController@store']);

Route::get('/convite/{code}', ['as' => 'admin.invitationcard.create', 'uses' => 'Admin\InvitationcardController@create']);

Route::get('/validar-convite/{code}', ['as' => 'site.invitationcard.show', 'uses' => 'Site\InvitationcardController@show']);


/**Contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
Route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

Route::get('/sobre', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);



/* END SITE */


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
