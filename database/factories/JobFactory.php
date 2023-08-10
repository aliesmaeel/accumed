<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Job::class;

    public function definition()
    {
        return [
        'job_title'=>fake()->jobTitle,
        'location'=>fake()->city,
        'type'=>'full',
        'description'=>fake()->text,
        'link'=>fake()->url()
        ];
    }
}
