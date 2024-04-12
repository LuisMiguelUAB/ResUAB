<?php

namespace Modules\InventarioEquipamentos\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;
use Modules\InventarioEquipamentos\Models\EquipamentoModel;

class EquipamentosMigration extends Migration {
    public function up(){
        $this->forge->addField([
            EquipamentoModel::FIELD_ID=>[
                'type'=>'BIGINT',
                'unsigned'=>true,
                'auto_increment'=>true,
            ],
            EquipamentoModel::FIELD_NOME=>[
                'type'=>'VARCHAR',
                'constraint'=>250,
            ],
            EquipamentoModel::FIELD_DESCRICAO=>[
                'type'=>'TEXT',
                'null'=>true,
            ],
            EquipamentoModel::FIELD_DATA=>[
                'type'=>'DATETIME',
                'null'=>true,
                'default'=>new RawSql('CURRENT_TIMESTAMP'),
            ],
            EquipamentoModel::FIELD_CREATED_AT=>[
                'type'=>'DATETIME',
                'null'=>true,
            ],
            EquipamentoModel::FIELD_UPDATED_AT=>[
                'type'=>'DATETIME',
                'default'=>new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
            ],
            EquipamentoModel::FIELD_DELETED_AT=>[
                'type'=>'DATETIME',
                'null'=>true,
            ],
        ]);

        $this->forge->addPrimaryKey(EquipamentoModel::FIELD_ID);
        $this->forge->createTable(EquipamentoModel::TABLE, true, [
            'ENGINE'=>'InnoDB',
        ]);
    }

    public function down(){
        $this->forge->dropTable(EquipamentoModel::TABLE, true);
    }
}
