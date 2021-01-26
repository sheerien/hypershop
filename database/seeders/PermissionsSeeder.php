<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();

        DB::table('permissions')->insert([
            0 => [
                'id' => 1,
                'name' => 'shop_config',
                'description' => 'User have permission to change/edit/update the shop configurations and settings'
            ],
            1 => [
                'id' => 2,
                'name' => 'add_product',
                'description' => 'User have Permission to add a new product to the shop'
            ],
            2 => [
                'id' => 3,
                'name' => 'edit_product',
                'description' => 'User have permission to edit/update product details'
            ],
            3 => [
                'id' => 4,
                'name' => 'delete_product',
                'description' => 'User have permission to remove the product from the shop'
            ],
            4 => [
                'id' => 5,
                'name' => 'archive_product',
                'description' => 'User have permission to archive the product, used when the need to remove the product availability while the product already has been purchased'
            ],
            5 => [
                'id' => 6,
                'name' => 'add_post',
                'description' => 'User can write a new post'
            ],
            6 => [
                'id' => 7,
                'name' => 'edit_post',
                'description' => 'User can edit/update a post'
            ],
            7 => [
                'id' => 8,
                'name' => 'delete_post',
                'description' => 'User can delete a post'
            ],
            8 => [
                'id' => 9,
                'name' => 'add_ticket',
                'description' => 'User can add support ticket'
            ],
            9 => [
                'id' => 10,
                'name' => 'edit_ticket',
                'description' => 'User can edit/update support ticket'
            ],
            10 => [
                'id' => 11,
                'name' => 'close_ticket',
                'description' => 'User can close support ticket'
            ],
            11 => [
                'id' => 12,
                'name' => 'view_order',
                'description' => 'User can view order details'
            ],
            12 => [
                'id' => 13,
                'name' => 'update_order',
                'description' => 'User can edit/update order details'
            ],
        ]);
    }
}
