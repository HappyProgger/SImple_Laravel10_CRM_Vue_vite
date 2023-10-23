<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 11; $i++) {
            for ($j = 1; $j < 4; $j++) {
                DB::table('stocks')->insert([
                    'product_id' => $i,
                    'warehouse_id' => $j,
                    'stock' => rand(50, 260),
                ]);
            }
        }
    }
}
