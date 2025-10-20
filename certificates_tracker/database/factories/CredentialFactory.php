<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credential>
 */
class CredentialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'issued_date' => $this->faker->date(),
            'expiry_date' => $this->faker->optional()->date(),
            'issuer' => $this->faker->company(),
            'user_id' => User::factory(),
            'type_id' => Type::factory(),
        ];
    }
}
