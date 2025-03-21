<?php

use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/home',[HomeController::class,'admin'])->name('admin.acceuil');

