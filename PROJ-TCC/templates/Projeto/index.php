<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto[]|\Cake\Collection\CollectionInterface $projeto
 */
?>
<div class="projeto index content">
    <?= $this->Html->link(__('New Projeto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Projeto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdProj') ?></th>
                    <th><?= $this->Paginator->sort('cdProf') ?></th>
                    <th><?= $this->Paginator->sort('cdCoord') ?></th>
                    <th><?= $this->Paginator->sort('cdAluno') ?></th>
                    <th><?= $this->Paginator->sort('cdAluno2') ?></th>
                    <th><?= $this->Paginator->sort('cdAluno3') ?></th>
                    <th><?= $this->Paginator->sort('cdAluno4') ?></th>
                    <th><?= $this->Paginator->sort('nomeProj') ?></th>
                    <th><?= $this->Paginator->sort('descrProj') ?></th>
                    <th><?= $this->Paginator->sort('dtInicio') ?></th>
                    <th><?= $this->Paginator->sort('dtFim') ?></th>
                    <th><?= $this->Paginator->sort('dtApres') ?></th>
                    <th><?= $this->Paginator->sort('notaProj') ?></th>
                    <th><?= $this->Paginator->sort('statusProj') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projeto as $projeto): ?>
                <tr>
                    <td><?= $this->Number->format($projeto->cdProj) ?></td>
                    <td><?= $this->Number->format($projeto->cdProf) ?></td>
                    <td><?= $this->Number->format($projeto->cdCoord) ?></td>
                    <td><?= $this->Number->format($projeto->cdAluno) ?></td>
                    <td><?= $this->Number->format($projeto->cdAluno2) ?></td>
                    <td><?= $this->Number->format($projeto->cdAluno3) ?></td>
                    <td><?= $this->Number->format($projeto->cdAluno4) ?></td>
                    <td><?= h($projeto->nomeProj) ?></td>
                    <td><?= h($projeto->descrProj) ?></td>
                    <td><?= h($projeto->dtInicio) ?></td>
                    <td><?= h($projeto->dtFim) ?></td>
                    <td><?= h($projeto->dtApres) ?></td>
                    <td><?= $this->Number->format($projeto->notaProj) ?></td>
                    <td><?= h($projeto->statusProj) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $projeto->cdProj]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projeto->cdProj]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projeto->cdProj], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->cdProj)]) ?>
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
