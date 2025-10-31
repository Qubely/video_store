<?php

use App\Http\Controllers\Admin\MenuManagement\SubMenu\Crud\SubMenuCrudController;
use Illuminate\Support\Facades\Route;
//vpx_imports
Route::prefix('admin')->group(function(){
    Route::resource('menu-management/sub-menu',SubMenuCrudController::class)->except(['destroy', 'show']);
    Route::post('menu-management/sub-menu/list',[SubMenuCrudController::class,'list']);
    Route::post('menu-management/sub-menu/delete-list',[SubMenuCrudController::class,'deleteList']);
    Route::post('menu-management/sub-menu/update-list',[SubMenuCrudController::class,'updateList']);
    //vpx_attach
});
