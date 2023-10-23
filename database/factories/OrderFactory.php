<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ["active", "completed", "canceled"];
        return [
//
//        'customer' => fake()->name(),
//        'warehouse_id' => rand(1,3),
//        'status' => $status[rand(1,3)],
//        'completed_at' =>  Carbon::now()->subHour(rand(1, 55))->subMinutes(rand(1, 55))
];

    }
}
