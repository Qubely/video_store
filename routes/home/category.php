<?php

use App\Http\Controllers\Home\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('category/{slug}',[CategoryController::class,'index']);
