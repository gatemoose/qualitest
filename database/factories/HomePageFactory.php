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
            'initial_description' => 'A Qualitest Engenharia é uma empresa líder em sondagens SPT e controle tecnológico de concreto. Especializada em fornecer dados precisos sobre a composição do solo e garantir a qualidade dos materiais de construção, a Qualitest assegura a excelência e a segurança dos projetos civis. Com uma equipe altamente qualificada e tecnologia de ponta, a empresa se destaca pela confiabilidade e precisão em todos os seus serviços.',

            'why_qualitest' => 'Escolher a nossa empresa significa optar por inovação e expertise no controle de qualidade de concreto e ensaios relacionados. Contamos com uma equipe altamente qualificada, cujos anos de experiência no setor de obras civis garantem resultados confiáveis e precisos. Nossa abordagem é focada na excelência e na melhoria contínua, oferecendo soluções que não apenas atendem, mas superam as expectativas dos nossos clientes. Com a gente, você tem a certeza de que seus projetos estarão sempre em boas mãos.',

            'our_values' => 'Nossos valores são centrados em atender às necessidades e expectativas dos clientes, garantindo resultados excepcionais e pareceres técnicos precisos. Comprometemo-nos a cumprir prazos acordados e a assegurar a qualidade dos materiais utilizados na construção civil, sempre mantendo a integridade e a transparência em nossos serviços.',
        ];
    }
}
