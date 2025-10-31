<?php

use App\Http\Controllers\Home\Preview\PreviewController;
use Illuminate\Support\Facades\Route;

Route::get('preview/{slug}',[PreviewController::class,'index']);
