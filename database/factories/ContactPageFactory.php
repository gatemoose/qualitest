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
            'address' => 'Rua Vicente Valentim do Vale, N° 281, Centro. Governador Dix-Sept Rosado.',

            'phone' => '(84) 9 9666-7342',

            'email' => 'qualitest@outlook.com.br',

            'google_maps_embedding' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7943.380016483192!2d-37.517965!3d-5.46392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ba6efdbda7d1bf%3A0x3065ade370ce7bdc!2sR.%20Vicente%20Valentim%20do%20Vale%2C%20281%20-%20Santa%20Catarina%2C%20Gov.%20Dix-Sept%20Rosado%20-%20RN%2C%2059790-000!5e0!3m2!1spt-BR!2sbr!4v1740260673351!5m2!1spt-BR!2sbr',
            
            'social_media' => 'ALTERAR NO PAINEL ADMINISTRATIVO.',
        ];
    }
}
