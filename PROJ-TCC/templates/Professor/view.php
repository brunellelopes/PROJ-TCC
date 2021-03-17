<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Professor $professor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Professor'), ['action' => 'edit', $professor->loginProf], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Professor'), ['action' => 'delete', $professor->loginProf], ['confirm' => __('Are you sure you want to delete # {0}?', $professor->loginProf), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Professor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Professor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="professor view content">
            <h3><?= h($professor->loginProf) ?></h3>
            <table>
                <tr>
                    <th><?= __('LoginProf') ?></th>
                    <td><?= h($professor->loginProf) ?></td>
                </tr>
                <tr>
                    <th><?= __('SenhaProf') ?></th>
                    <td><?= h($professor->senhaProf) ?></td>
                </tr>
                <tr>
                    <th><?= __('NomeProf') ?></th>
                    <td><?= h($professor->nomeProf) ?></td>
                </tr>
                <tr>
                    <th><?= __('EmailProf') ?></th>
                    <td><?= h($professor->emailProf) ?></td>
                </tr>
                <tr>
                    <th><?= __('CelProf') ?></th>
                    <td><?= h($professor->celProf) ?></td>
                </tr>
                <tr>
                    <th><?= __('CodAccount') ?></th>
                    <td><?= $this->Number->format($professor->codAccount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
