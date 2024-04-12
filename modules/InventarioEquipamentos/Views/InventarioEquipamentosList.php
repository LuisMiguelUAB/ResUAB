<?= view('Modules\InventarioEquipamentos\Views\templates\header', [
            'title'=>lang('InventarioEquipamentos.list'),
        ]) ?>

<section>

    <h1><?= lang('InventarioEquipamentos.hardware-list') ?></h1>

    <table>
        <thead>
            <tr>
                <th><?= lang('InventarioEquipamentos.id') ?></th>
                <th><?= lang('InventarioEquipamentos.name') ?></th>
                <th><?= lang('InventarioEquipamentos.description') ?></th>
                <th><?= lang('InventarioEquipamentos.registration-date') ?></th>
            </tr>
        </thead>
        <tbody>

            <?php

use Modules\InventarioEquipamentos\Models\EquipamentoModel;

 if(!empty($equipamentos??null)): ?>
                <?php foreach($equipamentos as $equipamento): ?>
                    <tr>
                        <td><?= $equipamento[EquipamentoModel::FIELD_ID] ?></td>
                        <td><?= $equipamento[EquipamentoModel::FIELD_NOME] ?></td>
                        <td><?= $equipamento[EquipamentoModel::FIELD_DESCRICAO] ?></td>
                        <td><?= $equipamento[EquipamentoModel::FIELD_DATA] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Sem registos</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

<?= view('Modules\InventarioEquipamentos\Views\templates\footer') ?>