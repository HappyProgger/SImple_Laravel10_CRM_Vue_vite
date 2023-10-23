<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products  = ["шашлык", "банан", "курица", "торт", "морковь", "помидор", "пирог", "тарталетки",
            "шарлотка", "кукурузные хлопья"];
        for ($i = 0; $i < 10; $i++){
            DB::table('products')->insert([
                'name' => $products[$i],
                'price' => rand(10,800),

            ]);
        }
    }
}
