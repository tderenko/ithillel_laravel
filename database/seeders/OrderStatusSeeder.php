<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderStatus::firstOrCreate(['name' => 'InProcess']);
        OrderStatus::firstOrCreate(['name' => 'Paid']);
        OrderStatus::firstOrCreate(['name' => 'Completed']);
        OrderStatus::firstOrCreate(['name' => 'Canceled']);
    }
}
