<?php

use App\Http\Controllers\admin\CategorieController;
use App\Http\Controllers\admin\OeuvreController;
use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/home',[HomeController::class,'admin'])->name('admin.acceuil');

Route::get('/admin/oeuvres/liste',[OeuvreController::class,'liste'])->name('admin.oeuvres.liste');

Route::get('/admin/oeuvres/ajouter',[OeuvreController::class,'ajouter'])->name('admin.oeuvres.ajouter');

Route::post('/admin/oeuvres/ajouter/traitement',[OeuvreController::class,'ajouter_traitement'])->name('admin.oeuvres.ajouter.traitement');

Route::get('/admin/oeuvres/{id}/modifier',[OeuvreController::class,'modifier'])->name('admin.oeuvres.modifier');

Route::post('/admin/oeuvres/{id}/modifier/traitement',[OeuvreController::class,'modifier_traitement'])->name('admin.oeuvres.modifier.traitement');

Route::post('/admin/oeuvres/{id}/supprimer/traitement',[OeuvreController::class,'supprimer_traitement'])->name('admin.oeuvres.supprimer.traitement');

Route::get('/admin/oeuvres/detail',[OeuvreController::class,'details'])->name('admin.oeuvres.detail');

Route::get('/admin/categories/liste',[CategorieController::class,'liste'])->name('admin.categories.liste');

Route::get('/admin/categories/ajouter',[CategorieController::class,'ajouter'])->name('admin.categories.ajouter');

Route::post('/admin/categories/ajouter/traitement',[CategorieController::class,'ajouter_traitement'])->name('admin.categories.ajouter.traitement');

Route::get('/admin/categories/{id}/modifier',[CategorieController::class,'modifier'])->name('admin.categories.modifier');

Route::post('/admin/categories/{id}/modifier/traitement',[CategorieController::class,'modifier_traitement'])->name('admin.categories.modifier.traitement');

Route::post('/admin/categories/{id}/supprimer/traitement',[CategorieController::class,'supprimer_traitement'])->name('admin.categories.supprimer.traitement');

Route::get('/admin/categories/detail',[CategorieController::class,'details'])->name('admin.categories.detail');
