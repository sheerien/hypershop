<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->truncate();

        DB::table('permission_role')->insert([
            0 => [
                'permission_id' =>  1,
                'role_id' => 1
            ],
            1 => [
                'permission_id' =>  2,
                'role_id' => 1
            ],
            2 => [
                'permission_id' =>  3,
                'role_id' => 1
            ],
            3 => [
                'permission_id' =>  4,
                'role_id' => 1
            ],
            4 => [
                'permission_id' =>  5,
                'role_id' => 1
            ],
            5 => [
                'permission_id' =>  6,
                'role_id' => 1
            ],
            6 => [
                'permission_id' =>  7,
                'role_id' => 1
            ],
            7 => [
                'permission_id' =>  8,
                'role_id' => 1
            ],
            8 => [
                'permission_id' =>  9,
                'role_id' => 1
            ],
            9 => [
                'permission_id' =>  10,
                'role_id' => 1
            ],
            10 => [
                'permission_id' =>  11,
                'role_id' => 1
            ],
            11 => [
                'permission_id' =>  2,
                'role_id' => 2
            ],
            12 => [
                'permission_id' =>  3,
                'role_id' => 2
            ],
            13 => [
                'permission_id' =>  4,
                'role_id' => 2
            ],
            14 => [
                'permission_id' =>  5,
                'role_id' => 2
            ],
            15 => [
                'permission_id' =>  6,
                'role_id' => 2
            ],
            16 => [
                'permission_id' =>  7,
                'role_id' => 2
            ],
            17 => [
                'permission_id' =>  8,
                'role_id' => 2
            ],
            18 => [
                'permission_id' =>  9,
                'role_id' => 2
            ],
            19 => [
                'permission_id' =>  10,
                'role_id' => 2
            ],
            20 => [
                'permission_id' =>  11,
                'role_id' => 2
            ],
            21 => [
                'permission_id' =>  9,
                'role_id' => 3
            ],
            22 => [
                'permission_id' =>  10,
                'role_id' => 3
            ],
            23 => [
                'permission_id' =>  11,
                'role_id' => 3
            ],
            24 => [
                'permission_id' =>  12,
                'role_id' => 1
            ],
            25 => [
                'permission_id' =>  13,
                'role_id' => 1
            ],
            26 => [
                'permission_id' =>  12,
                'role_id' => 2
            ],
            27 => [
                'permission_id' =>  13,
                'role_id' => 2
            ],
            28 => [
                'permission_id' =>  12,
                'role_id' => 3
            ],
        ]);
    }
}
