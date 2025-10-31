<?php

namespace App\Models;

use App\Traits\BaseTrait;
use Illuminate\Database\Eloquent\Model;
//vpx_imports
//crudDone
class SubMenu extends Model
{
    use BaseTrait;
    protected $table = "sub_menus";
    protected $fillable = [
        'name',
        'status',
        'slug',
        'serial',
        'main_menu_id'
    ];
    //vpx_attach

    public function parent()
    {
        return $this->hasOne(MainMenu::class,'id','main_menu_id');
    }
}
