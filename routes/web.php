<?php

use Illuminate\Support\Facades\Route;// routes/web.php
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});
// CRUD routes for publications
Route::resource('publications', PublicationController::class);


Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "Connected successfully to the database: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "Could not connect to the database. Error: " . $e->getMessage();
    }
});