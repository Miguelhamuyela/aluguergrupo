<?php

namespace Database\Factories;

use App\Models\About;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => "O “Dia das Meninas e a TIC”",
            'information' => "
            O “Dia das Meninas e a TIC” foi instituído através da Resolução 70 de Plenipotenciária da União Internacional das Telecomunicações (Rev. Busan- 2014) com o propósito de promover o acesso e o uso das Tecnologias de Informação e Comunicação nas jovens mulheres.

O dia internacional das Meninas e as TIC, será celebrado no dia 21 de Abril de 2022, sob lema: “Acesso e Segurança”.

Neste contexto, em Angola celebrar-se-á com um Fórum denominado “As Meninas e as TIC”, no auditório da Mediateca Luanda, na província de Luanda, e contará com a participação de aproximadamente cem (100) jovens mulheres, de vários extractos sociais, desde estudantes do ensino, secundário, médio e universitário, propriamente dos cursos das engenharias de telecomunicações, informática, ciências da computação, matemática e física, bem como profissionais do sector.
            "
        ];
    }
}
