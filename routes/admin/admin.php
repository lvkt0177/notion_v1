<?php

use Illuminate\Support\Facades\Route;
use App\Acl\Acl;
//Controller

Route::prefix('admin')->name('admin.')->group(function () {

    //--------------------------------------
    Route::middleware([
        'auth.admin', 
    ])->group(function () {
        include('home.php');
    });
});
    