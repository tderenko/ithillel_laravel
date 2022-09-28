<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'role_id' => Role::customer()->first()->id,
            'email_verified_at' => now(),
            'password' => Hash::make('test1234'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function admin()
    {
        return $this->state(fn (array $attr) => ['role_id' => Role::admin()->first()->id]);
    }

    public function withEmail($email)
    {
        return $this->state(fn (array $attr) => [
                'email' => $email
        ]);
    }

    public function withPassword($password)
    {
        return $this->state(fn (array $attr) => [
                'password' => Hash::make($password)
        ]);
    }

    public function withName($name)
    {
        return $this->state(fn (array $attr) => [
                'name' => Hash::make($name)
        ]);
    }
}
