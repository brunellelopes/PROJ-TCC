<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliacao[]|\Cake\Collection\CollectionInterface $avaliacao
 */
?>
<div class="avaliacao index content">
    <?= $this->Html->link(__('New Avaliacao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Avaliacao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdAvaliacao') ?></th>
                    <th><?= $this->Paginator->sort('cdProj') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avaliacao as $avaliacao): ?>
                <tr>
                    <td><?= $this->Number->format($avaliacao->cdAvaliacao) ?></td>
                    <td><?= $this->Number->format($avaliacao->cdProj) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $avaliacao->cdAvaliacao]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avaliacao->cdAvaliacao]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avaliacao->cdAvaliacao], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacao->cdAvaliacao)]) ?>
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
