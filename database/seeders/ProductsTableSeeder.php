<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'description' => 'Powerful laptop for work and gaming.',
                'price' => 1200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest model smartphone with advanced features.',
                'price' => 800.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
