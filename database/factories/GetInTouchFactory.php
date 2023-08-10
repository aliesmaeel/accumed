<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GetInTouch>
 */
class GetInTouchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'site'=>fake()->url,
            'email'=>fake()->email,
            'phone'=>fake()->phoneNumber,

        ];
    }
}
