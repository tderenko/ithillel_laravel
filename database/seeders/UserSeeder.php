<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->admin()
            ->withName('Taras')
            ->withEmail('taras@test.com')
            ->withPassword('password')
            ->create();

        User::factory(10)
            ->create();
    }
}
