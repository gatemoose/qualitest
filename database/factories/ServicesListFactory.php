<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ServicesList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\ServicesList>
 */
final class ServicesListFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = ServicesList::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'description' => fake()->text,
        ];
    }
}
