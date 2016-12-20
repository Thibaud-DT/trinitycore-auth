<?php

namespace ThibaudDT\LaravelTrinityCoreAuth;

use Illuminate\Support\Facades\Route;

class TrinityCore{

    public function auth(){
        Route::group([], function ($router) {
            require __DIR__.'/Http/routes.php';
        });
    }

}