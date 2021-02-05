<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class GrandPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // grand permission to superadmin
        $permissions = Permission::all();

        $permissions->map(function($permission) {
            DB::table('model_has_permissions')->insert([
                'permission_id' => $permission->id,
                'model_type' => 'App\Models\User',
                'model_id' => 1
            ]);
        });

        // grand menu to permission
        $menus = Menu::all();

        $menus->map(function($menu) {
            $permission_id = Permission::where('name', 'read-'.$menu->slug)->first()->id;

            DB::table('permission_has_menus')->insert([
                'menu_id' => $menu->id,
                'permission_id' => $permission_id
            ]);
        });
    }
}
