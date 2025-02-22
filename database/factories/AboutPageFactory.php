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
            'history' => 'Somos uma empresa fundada em outubro de 2017 pela engenheira idealizadora e responsável técnica Edilene Patricia da Silva Oliveira, que traz inovação ao mercado de controle de qualidade de concreto e demais ensaios voltados à área, contando com larga experiência dos seus funcionários no mercado adquirida através de longos anos de atuação na área de obras civis. Contando com equipamentos novos e de excelente qualidade, e profissionais capacitados, podemos atender sua demanda de forma personalizada com rapidez e eficiência.',

            'mission' => 'Atender às necessidades e expectativas dos nossos clientes na obtenção de resultados e elaboração de parecer técnico, no controle de qualidade dos materiais empregados na construção civil, cumprindo os prazos acordados e garantindo a ausência de desvios nos serviços prestados. ',

            'values' => 'Os valores da Qualitest Engenharia incluem a valorização do próximo, qualidade, inovação e cumprimento de prazos. A ética e a responsabilidade garantem ações comprometidas com resultados que beneficiem nossos clientes.',

            'vision' => 'Ser referência em assessoria técnica e controle tecnológico de materiais da construção civil, como concreto e solos, é vital para garantir qualidade e segurança nas obras. Isso envolve técnicas avançadas e um compromisso com a excelência no atendimento, oferecendo soluções eficazes para o mercado. ',

            'patricia' => 'Edilene Patrícia da Silva Oliveira é a Técnica em Edificações e Engenheira Civil registrada no CREA (210703637-3) que ocupa a posição de Responsável Técnica na QualiTest Engenharia e Assessoria Técnica. Com especialização em Dimensionamento, Patologia, Terapia e Tecnologia em Estruturas de Concreto, Edilene possui uma sólida formação complementar, que inclui cursos em revestimento cerâmico, manutenção predial e diversos simpósios na área da construção civil. ',

            'professional_experience' => '<ul>
            <li>Monitoria do Laboratório de Construção Civil IFRN Mossoró</li>
            <li>Técnica em Edificações Metro Quadrado Construções e Serviços</li>
            <li>Técnica em Edificações 3B Serviços e Construções</li>
            <li>Técnica em Edificações WSC Empreendimentos e Construções</li>
            <li>Técnica em Edificações Vipetro – Vilmar Pereira</li>
            <li>Construções e Montagens Petrolíferas</li>
            <li>Supervisora de Laboratório Consultest Engenharia e Serviços – Controle tecnológico da construção da fábrica de Cimentos Mizú – Baraúna RN</li>
            <li>Técnica de Planejamento e Diligenciamento Sigmatec</li>
            <li>Responsável Técnica QualiTest Engenharia e Assessoria Técnica</li>
            </ul>',
            
            'additional_qualifications' => '<ul>
            <li>Sistema de Revestimento Cerâmico – IFRN Mossoró</li>
            <li>Manutenção Predial – IFRN Mossoró</li>
            <li>1º Simpósio da Construção Civil – IFRN Mossoró</li>
            <li>2º Simpósio da Construção Civil – IFRN Mossoró</li>
            <li>Ciclo de Palestras da Construção Civil – IFRN Natal</li>
            <li>MicroStation 2D – IFRN Mossoró</li>
            <li>Planejando a Construção</li>
            <li>Curso de Orientação Profissional</li>
            <li>Curso de Gestão de Qualidade Ampla</li>
            <li>Primeiros Socorros – UNP</li>
            <li>Combate a Incêndio – UNP</li>
            <li>NR10 – Instalações e Serviços em Eletricidade – UNP</li>
            <li>Segurança em Atividades de Petróleo e Gás – UNP</li>
            <li>Higiene Ocupacional – UNP</li>
            </ul>',
        ];
    }
}
