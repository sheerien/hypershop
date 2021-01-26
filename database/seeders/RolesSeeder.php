<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            0 => [
                'id' => 1,
                'name' => 'Super Admin'
            ],
            1 => [
                'id' => 2,
                'name' => 'Shop Manager'
            ],
            2 => [
                'id' => 3,
                'name' => 'Support Agent'
            ],
            3 => [
                'id' => 4,
                'name' => 'Customer'
            ],
        ]);
    }
}
