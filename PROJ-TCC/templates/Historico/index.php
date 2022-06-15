<?php
/**
// * @var \App\View\AppView $this
 * @var \App\Model\Entity\Historico[]|\Cake\Collection\CollectionInterface $historico
 */
?>
<div class="historico index content">
    <?= $this->Html->link(__('New Historico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Historico') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdHist') ?></th>
                    <th><?= $this->Paginator->sort('versaoProj') ?></th>
                    <th><?= $this->Paginator->sort('nmArquivo') ?></th>
                    <th><?= $this->Paginator->sort('dtVersao') ?></th>
                    <th><?= $this->Paginator->sort('cdProj') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historico as $historico): ?>
                <tr>
                    <td><?= $this->Number->format($historico->cdHist) ?></td>
                    <td><?= h($historico->versaoProj) ?></td>
                    <td><?= h($historico->nmArquivo) ?></td>
                    <td><?= h($historico->dtVersao) ?></td>
                    <td><?= $this->Number->format($historico->cdProj) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $historico->cdHist]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historico->cdHist]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historico->cdHist], ['confirm' => __('Are you sure you want to delete # {0}?', $historico->cdHist)]) ?>
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
