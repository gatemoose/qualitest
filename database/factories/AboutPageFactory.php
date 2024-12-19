<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\AboutPage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\AboutPage>
 */
final class AboutPageFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = AboutPage::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'mission' => fake()->word,
            'values' => fake()->word,
            'vision' => fake()->word,
            'patricia' => fake()->word,
            'additional_qualifications' => fake()->word,
            'professional_experience' => fake()->word,
            'history' => fake()->word,
        ];
    }
}
