<?php

use App\Http\Controllers\AutoTestingController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [AutoTestingController::class,'showMessage']);
