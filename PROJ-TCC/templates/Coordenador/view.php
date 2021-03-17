<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordenador $coordenador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coordenador'), ['action' => 'edit', $coordenador->loginCoord], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coordenador'), ['action' => 'delete', $coordenador->loginCoord], ['confirm' => __('Are you sure you want to delete # {0}?', $coordenador->loginCoord), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coordenador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coordenador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coordenador view content">
            <h3><?= h($coordenador->loginCoord) ?></h3>
            <table>
                <tr>
                    <th><?= __('LoginCoord') ?></th>
                    <td><?= h($coordenador->loginCoord) ?></td>
                </tr>
                <tr>
                    <th><?= __('SenhaCoord') ?></th>
                    <td><?= h($coordenador->senhaCoord) ?></td>
                </tr>
                <tr>
                    <th><?= __('NomeCoord') ?></th>
                    <td><?= h($coordenador->nomeCoord) ?></td>
                </tr>
                <tr>
                    <th><?= __('EmailCoord') ?></th>
                    <td><?= h($coordenador->emailCoord) ?></td>
                </tr>
                <tr>
                    <th><?= __('CodAccount') ?></th>
                    <td><?= $this->Number->format($coordenador->codAccount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
