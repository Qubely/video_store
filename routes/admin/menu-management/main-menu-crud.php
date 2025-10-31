<?php

use App\Http\Controllers\Admin\MenuManagement\MainMenu\Crud\MainMenuCrudController;
use Illuminate\Support\Facades\Route;
//vpx_imports
Route::prefix('admin')->group(function(){
    Route::resource('menu-management/main-menu',MainMenuCrudController::class)->except(['destroy', 'show']);
    Route::post('menu-management/main-menu/list',[MainMenuCrudController::class,'list']);
    Route::post('menu-management/main-menu/delete-list',[MainMenuCrudController::class,'deleteList']);
    Route::post('menu-management/main-menu/update-list',[MainMenuCrudController::class,'updateList']);
    //vpx_attach
});
