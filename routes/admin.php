<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Administrador;


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




/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware([Administrador::class])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(Administrador::class);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(Administrador::class);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(Administrador::class);;

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });
    /* gallery */
    Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
    Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);

    Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
    Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);

    Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
    Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);

    Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
    /* end gallery */

    /* imageGallery */
    Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
    Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);

    Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
    /* End imageGallery */


    /* about */
    Route::get('admin/about/show', ['as' => 'admin.about.show', 'uses' => 'Admin\AboutController@show']);

    Route::get('admin/about/edit/{id}', ['as' => 'admin.about.edit', 'uses' => 'Admin\AboutController@edit']);
    Route::put('admin/about/update/{id}', ['as' => 'admin.about.update', 'uses' => 'Admin\AboutController@update']);

    /* news */
    Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
    Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

    Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
    Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

    Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

    Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
    /* end news */


    /* Events */
    Route::get('admin/event/index', ['as' => 'admin.event.index', 'uses' => 'Admin\EventController@list']);
    Route::get('admin/event/show/{id}', ['as' => 'admin.event.show', 'uses' => 'Admin\EventController@show']);

    Route::get('admin/event/create', ['as' => 'admin.event.create', 'uses' => 'Admin\EventController@create']);
    Route::post('admin/event/store', ['as' => 'admin.event.store', 'uses' => 'Admin\EventController@store']);

    Route::get('admin/event/edit/{id}', ['as' => 'admin.event.edit', 'uses' => 'Admin\EventController@edit']);
    Route::put('admin/event/update/{id}', ['as' => 'admin.event.update', 'uses' => 'Admin\EventController@update']);

    Route::get('admin/event/delete/{id}', ['as' => 'admin.event.delete', 'uses' => 'Admin\EventController@destroy']);
    /* end Events */


    /* configuration */
    Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

    Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
    Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
    /* end configuration */

    /* marcar-presenca */
    Route::get('admin/marcar-presenca/index', ['as' => 'admin.invitationcard.index', 'uses' => 'Admin\InvitationcardController@list']);
    Route::get('admin/marcar-presenca/show/{id}', ['as' => 'admin.invitationcard.show', 'uses' => 'Admin\InvitationcardController@show']);
    Route::put('admin/marcar-presenca/update/{id}', ['as' => 'admin.invitationcard.update', 'uses' => 'Admin\InvitationcardController@update']);
    

    /* mulheres-influentes */
    Route::get('admin/mulheres-influentes/index', ['as' => 'admin.influentialWomen.index', 'uses' => 'Admin\InfluentialWomenController@list']);
    Route::get('admin/mulheres-influentes/show/{id}', ['as' => 'admin.influentialWomen.show', 'uses' => 'Admin\InfluentialWomenController@show']);

    Route::get('admin/mulheres-influentes/create', ['as' => 'admin.influentialWomen.create', 'uses' => 'Admin\InfluentialWomenController@create']);
    Route::post('admin/mulheres-influentes/store', ['as' => 'admin.influentialWomen.store', 'uses' => 'Admin\InfluentialWomenController@store']);

    Route::get('admin/mulheres-influentes/edit/{id}', ['as' => 'admin.influentialWomen.edit', 'uses' => 'Admin\InfluentialWomenController@edit']);
    Route::put('admin/mulheres-influentes/update/{id}', ['as' => 'admin.influentialWomen.update', 'uses' => 'Admin\InfluentialWomenController@update']);

    Route::get('admin/mulheres-influentes/delete/{id}', ['as' => 'admin.influentialWomen.delete', 'uses' => 'Admin\InfluentialWomenController@destroy']);
    /* end mulheres-influentes */

});

