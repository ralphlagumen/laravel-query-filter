<?php

namespace Ambengers\QueryFilter\Tests;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Route::namespace('Ambengers\QueryFilter\Tests\Controllers')
            ->middleware('web')
            ->group(function () {
                Route::get('/posts', 'PostsController@index')->name('posts.index');
                Route::get('/posts/{post}', 'PostsController@show')->name('posts.show');
            });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
