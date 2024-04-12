<?php

namespace Modules\InventarioEquipamentos\Models;

use CodeIgniter\Model;

class EquipamentoModel extends Model {

    const TABLE = 'tbl_equipamentos';

    const FIELD_ID = 'id';
    const FIELD_NOME = 'nome';
    const FIELD_DESCRICAO = 'descricao';
    const FIELD_DATA = 'data_de_registo';
    const FIELD_CREATED_AT = 'created_at';
    const FIELD_UPDATED_AT = 'updated_at';
    const FIELD_DELETED_AT = 'deleted_at';
    protected $table            = self::TABLE;
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        self::FIELD_NOME,
        self::FIELD_DESCRICAO,
        self::FIELD_DATA,
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = self::FIELD_CREATED_AT;
    protected $updatedField  = self::FIELD_UPDATED_AT;
    protected $deletedField  = self::FIELD_DELETED_AT;

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
