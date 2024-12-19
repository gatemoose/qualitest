<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\HomePage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\HomePage>
 */
final class HomePageFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = HomePage::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'initial_description' => fake()->word,
            'why_qualitest' => fake()->word,
            'our_values' => fake()->word,
        ];
    }
}
