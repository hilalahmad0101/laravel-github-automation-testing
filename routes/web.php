<?php

use App\Http\Controllers\AutoTestingController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [AutoTestingController::class,'showMessage']);
Route::get('/sum',  [AutoTestingController::class,'sum']);
