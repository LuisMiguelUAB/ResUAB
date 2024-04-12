<?php
use Config\Services;
use Modules\InventarioEquipamentos\Controllers\InventarioEquipamentosController;

$routes = Services::routes();

$routes->get("/inventario-equipamentos", [InventarioEquipamentosController::class, 'index'], ['as'=>'inventario-equipamentos-index']);

$routes->get("/inventario-equipamentos/lista", [InventarioEquipamentosController::class, 'list'], ['as'=>'inventario-equipamentos-list']);

