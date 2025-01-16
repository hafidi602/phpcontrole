<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerlogin;
use App\Http\Controllers\controllerAuth;
use App\Http\Controllers\controllercreate;
use App\Http\Controllers\controllerInterface;
use App\Http\Controllers\controllerStore;
Route::get('/create',[controllercreate::class,'create'])->name('create');
Route::get('/historique',[controllerInterface::class,'historique'])->name('historique');
Route::get('/horreur',[controllerInterface::class,'horreur'])->name('horreur');
Route::get('/action',[controllerInterface::class,'action'])->name('action');
Route::get('/romantique',[controllerInterface::class,'romantique'])->name('romantique');
Route::get('/login',[controllerlogin::class,'login'])->name('login');
Route::post('/auth',[controllerAuth::class,'auth'])->name('auth');
Route::get('/interface',[controllerInterface::class,'interface'])->name('interface');
Route::post('/store',[controllerStore::class,'store'])->name('store');
Route::get('/detail/{id}',[controllerInterface::class,'detail'])->name('film.detail');
Route::get('/watch/{id}',[controllerInterface::class,'watch'])->name('watch');
Route::post('/recherche',[controllerInterface::class,'recherche'])->name("recherche");