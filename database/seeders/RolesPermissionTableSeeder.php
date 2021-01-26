<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(PermissionsRolesSeeder::class);
    }
}
