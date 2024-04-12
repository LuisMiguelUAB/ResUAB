<?php

namespace Modules\InventarioEquipamentos\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
use Faker\Generator;
use Modules\InventarioEquipamentos\Models\EquipamentoModel;

class EquipamentosSeed extends Seeder{

    protected ?Generator $faker;

    public function __construct(){
        $this->faker = Factory::create();
    }

    public function adicionarEquipamento(array $dados=[]){
        $model = new EquipamentoModel();

        $dados +=[
            EquipamentoModel::FIELD_NOME=>$this->faker->streetName(),// $this->faker->name(),
            EquipamentoModel::FIELD_DESCRICAO=>$this->faker->text(400),
            EquipamentoModel::FIELD_DATA=>$this->faker->dateTimeBetween('-'.round(rand(0,120)).' month', 'now')->format('Y-m-d H:i:s'),
        ];

        $model->insert($dados);
    }

    public function run(){
        for($i=0; $i<100; $i++){
            $this->adicionarEquipamento();
        }
    }
}
