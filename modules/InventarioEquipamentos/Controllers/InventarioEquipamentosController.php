<?php
namespace Modules\InventarioEquipamentos\Controllers;

use App\Controllers\BaseController;
use Modules\InventarioEquipamentos\Models\EquipamentoModel;
use PhpParser\Node\Expr\AssignOp\Mod;


class InventarioEquipamentosController extends BaseController{
    public function index(){
        //echo "InventarioEquipamentosController";

        return view("Modules\InventarioEquipamentos\Views\InventarioEquipamentosIndex", [
        ]);
    }
    public function list(){
        $model = new EquipamentoModel();
        $equipamentos = $model->findAll();

        return view("Modules\InventarioEquipamentos\Views\InventarioEquipamentosList", [
            'equipamentos'=>$equipamentos,
        ]);
    }
}