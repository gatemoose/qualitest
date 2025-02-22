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
            'blue_phrase' => 'Nos encaixamos em qualquer prazo!',

            'text1' => 'Oferecemos um serviço que contempla uma variedade de ensaios, trazendo comodidade e segurança aos nossos clientes.',

            'text2' => 'Parecer técnico é a manifestação especializada sobre determinado assunto, no nosso caso a real situação de uma edificação quando se trata de parecer técnico de obras civis.',

            'text3' => 'Ensaios em concreto fresco endurecido, sejam destrutivos ou não, bem como cimento, argamassa e agregados.',
        ];
    }
}
