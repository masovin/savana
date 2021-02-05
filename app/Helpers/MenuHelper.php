<?php

namespace App\Helpers;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class MenuHelper 
{
    public static function getUserMenu()
    {
        $user = Auth::user();
        $permissions = $user->getAllPermissions()->pluck('id');

        $menu = Menu::whereHas('permissions', function($query) use ($permissions){
            $query->whereIn('permission_id', $permissions);
        })->get();

        return $menu;
    }
}