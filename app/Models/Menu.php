<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->hasMany(PermissionHasMenu::class,'menu_id','id');
    }
    
}
