<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ServicesPage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\ServicesPage>
 */
final class ServicesPageFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = ServicesPage::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'blue_phrase' => fake()->word,
            'text1' => fake()->word,
            'text2' => fake()->word,
            'text3' => fake()->word,
        ];
    }
}
