<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Projeto'), ['action' => 'edit', $projeto->cdProj], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Projeto'), ['action' => 'delete', $projeto->cdProj], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->cdProj), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projeto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Projeto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projeto view content">
            <h3><?= h($projeto->cdProj) ?></h3>
            <table>
                <tr>
                    <th><?= __('NomeProj') ?></th>
                    <td><?= h($projeto->nomeProj) ?></td>
                </tr>
                <tr>
                    <th><?= __('DescrProj') ?></th>
                    <td><?= h($projeto->descrProj) ?></td>
                </tr>
                <tr>
                    <th><?= __('StatusProj') ?></th>
                    <td><?= h($projeto->statusProj) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdProj') ?></th>
                    <td><?= $this->Number->format($projeto->cdProj) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdProf') ?></th>
                    <td><?= $this->Number->format($projeto->cdProf) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdCoord') ?></th>
                    <td><?= $this->Number->format($projeto->cdCoord) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdAluno') ?></th>
                    <td><?= $this->Number->format($projeto->cdAluno) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdAluno2') ?></th>
                    <td><?= $this->Number->format($projeto->cdAluno2) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdAluno3') ?></th>
                    <td><?= $this->Number->format($projeto->cdAluno3) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdAluno4') ?></th>
                    <td><?= $this->Number->format($projeto->cdAluno4) ?></td>
                </tr>
                <tr>
                    <th><?= __('NotaProj') ?></th>
                    <td><?= $this->Number->format($projeto->notaProj) ?></td>
                </tr>
                <tr>
                    <th><?= __('DtInicio') ?></th>
                    <td><?= h($projeto->dtInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('DtFim') ?></th>
                    <td><?= h($projeto->dtFim) ?></td>
                </tr>
                <tr>
                    <th><?= __('DtApres') ?></th>
                    <td><?= h($projeto->dtApres) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
