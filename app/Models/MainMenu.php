<?php

namespace App\Models;

use App\Traits\BaseTrait;
use Illuminate\Database\Eloquent\Model;
//vpx_imports
//crudDone
class MainMenu extends Model
{
    use BaseTrait;
    protected $table = "main_menus";
    protected $fillable = [
        'name',
        'status',
        'slug',
        'serial'
    ];
    //vpx_attach
}
