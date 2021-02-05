<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            //parent menu
            [
                'name' => 'Dashboard',
                'slug' => 'dashboard'
            ],
            [
                'name' => 'Master',
                'slug' => 'master'
            ],
            [
                'name' => 'System',
                'slug' => 'system'
            ],
            [
                'name' => 'Report',
                'slug' => 'report'
            ],
            [
                'name' => 'Transaction',
                'slug' => 'transaction'
            ],
        ]);
    }
}
