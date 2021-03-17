<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->loginAluno], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->loginAluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->loginAluno), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aluno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aluno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aluno view content">
            <h3><?= h($aluno->loginAluno) ?></h3>
            <table>
                <tr>
                    <th><?= __('LoginAluno') ?></th>
                    <td><?= h($aluno->loginAluno) ?></td>
                </tr>
                <tr>
                    <th><?= __('SenhaAluno') ?></th>
                    <td><?= h($aluno->senhaAluno) ?></td>
                </tr>
                <tr>
                    <th><?= __('NomeAluno') ?></th>
                    <td><?= h($aluno->nomeAluno) ?></td>
                </tr>
                <tr>
                    <th><?= __('EmailAluno') ?></th>
                    <td><?= h($aluno->emailAluno) ?></td>
                </tr>
                <tr>
                    <th><?= __('MatAluno') ?></th>
                    <td><?= $this->Number->format($aluno->matAluno) ?></td>
                </tr>
                <tr>
                    <th><?= __('CodAccount') ?></th>
                    <td><?= $this->Number->format($aluno->codAccount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
