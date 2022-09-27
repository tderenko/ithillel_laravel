<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Helpers\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Roles::cases() as $role) {
            Role::firstOrCreate(['name' => $role->value]);
        }
    }
}
