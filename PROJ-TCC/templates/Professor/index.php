<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Professor[]|\Cake\Collection\CollectionInterface $professor
 */
?>
<div class="professor index content">
    <?= $this->Html->link(__('Logout'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('New Professor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Professor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdProf') ?></th>
                    <th><?= $this->Paginator->sort('loginProf') ?></th>
                    <th><?= $this->Paginator->sort('senhaProf') ?></th>
                    <th><?= $this->Paginator->sort('nomeProf') ?></th>
                    <th><?= $this->Paginator->sort('emailProf') ?></th>
                    <th><?= $this->Paginator->sort('celProf') ?></th>
                    <th><?= $this->Paginator->sort('cdAccount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professor as $professor): ?>
                <tr>
                    <td><?= $this->Number->format($professor->cdProf) ?></td>
                    <td><?= h($professor->loginProf) ?></td>
                    <td><?= h($professor->senhaProf) ?></td>
                    <td><?= h($professor->nomeProf) ?></td>
                    <td><?= h($professor->emailProf) ?></td>
                    <td><?= h($professor->celProf) ?></td>
                    <td><?= $this->Number->format($professor->cdAccount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $professor->loginProf]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $professor->loginProf]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $professor->loginProf], ['confirm' => __('Are you sure you want to delete # {0}?', $professor->loginProf)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
