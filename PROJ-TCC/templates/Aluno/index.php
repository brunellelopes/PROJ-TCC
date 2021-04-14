<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $aluno
 */
?>
<div class="aluno index content">
    <?= $this->Html->link(__('Logout'), ['action' => 'logout']) ?>
    <?= $this->Html->link(__('New Aluno'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aluno') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdAluno') ?></th>
                    <th><?= $this->Paginator->sort('loginAluno') ?></th>
                    <th><?= $this->Paginator->sort('senhaAluno') ?></th>
                    <th><?= $this->Paginator->sort('matAluno') ?></th>
                    <th><?= $this->Paginator->sort('nomeAluno') ?></th>
                    <th><?= $this->Paginator->sort('emailAluno') ?></th>
                    <th><?= $this->Paginator->sort('cdAccount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aluno as $aluno): ?>
                <tr>
                    <td><?= $this->Number->format($aluno->cdAluno) ?></td>
                    <td><?= h($aluno->loginAluno) ?></td>
                    <td><?= h($aluno->senhaAluno) ?></td>
                    <td><?= $this->Number->format($aluno->matAluno) ?></td>
                    <td><?= h($aluno->nomeAluno) ?></td>
                    <td><?= h($aluno->emailAluno) ?></td>
                    <td><?= $this->Number->format($aluno->cdAccount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->loginAluno]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->loginAluno]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->loginAluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->loginAluno)]) ?>
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
