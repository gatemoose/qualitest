<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ContactPage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\ContactPage>
 */
final class ContactPageFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = ContactPage::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'address' => fake()->address,
            'phone' => fake()->phoneNumber,
            'email' => fake()->safeEmail,
            'google_maps_embedding' => fake()->word,
            'social_media' => fake()->word,
        ];
    }
}
