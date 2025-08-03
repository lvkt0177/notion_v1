<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::resource('admin/home', HomeController::class);
