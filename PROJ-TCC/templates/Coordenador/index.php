<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordenador[]|\Cake\Collection\CollectionInterface $coordenador
 */
?>
<div class="coordenador index content">
    <?= $this->Html->link(__('New Coordenador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coordenador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdCoord') ?></th>
                    <th><?= $this->Paginator->sort('loginCoord') ?></th>
                    <th><?= $this->Paginator->sort('senhaCoord') ?></th>
                    <th><?= $this->Paginator->sort('nomeCoord') ?></th>
                    <th><?= $this->Paginator->sort('emailCoord') ?></th>
                    <th><?= $this->Paginator->sort('cdAccount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coordenador as $coordenador): ?>
                <tr>
                    <td><?= $this->Number->format($coordenador->cdCoord) ?></td>
                    <td><?= h($coordenador->loginCoord) ?></td>
                    <td><?= h($coordenador->senhaCoord) ?></td>
                    <td><?= h($coordenador->nomeCoord) ?></td>
                    <td><?= h($coordenador->emailCoord) ?></td>
                    <td><?= $this->Number->format($coordenador->cdAccount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coordenador->loginCoord]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordenador->loginCoord]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coordenador->loginCoord], ['confirm' => __('Are you sure you want to delete # {0}?', $coordenador->loginCoord)]) ?>
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
