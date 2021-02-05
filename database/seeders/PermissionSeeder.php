<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = Menu::all();

        $menus->map(function($menu){
            $permissions = ['create-','read-','update-','delete-'];

            foreach($permissions as $permission) {
                DB::table('permissions')->insert([
                    'name' => $permission.$menu->slug,
                    'guard_name' => 'web'
                ]);
            };
            
        });
    }
}
