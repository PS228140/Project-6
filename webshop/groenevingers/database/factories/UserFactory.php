<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\UserStatus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "role_id" => 1,
            "email" => fake()->email(),
            "password" =>  Hash::make('password'),
            "name" => fake()->name(),
            "branch_id" => fake()->randomFloat(0, 1, 3),
            "status_id" => UserStatus::inRandomOrder()->first()->id,
            "phone" => fake()->phoneNumber(),
            "created_at" => $this->faker->dateTimeBetween('-1 year', 'now'),
            "updated_at" => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(
            fn(array $attributes) => [
                "email_verified_at" => null,
            ]
        );
    }
}
