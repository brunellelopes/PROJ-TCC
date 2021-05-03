<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Historico $historico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Historico'), ['action' => 'edit', $historico->cdHist], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Historico'), ['action' => 'delete', $historico->cdHist], ['confirm' => __('Are you sure you want to delete # {0}?', $historico->cdHist), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Historico'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Historico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="historico view content">
            <h3><?= h($historico->cdHist) ?></h3>
            <table>
                <tr>
                    <th><?= __('VersaoProj') ?></th>
                    <td><?= h($historico->versaoProj) ?></td>
                </tr>
                <tr>
                    <th><?= __('NmArquivo') ?></th>
                    <td><?= h($historico->nmArquivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdHist') ?></th>
                    <td><?= $this->Number->format($historico->cdHist) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdProj') ?></th>
                    <td><?= $this->Number->format($historico->cdProj) ?></td>
                </tr>
                <tr>
                    <th><?= __('DtVersao') ?></th>
                    <td><?= h($historico->dtVersao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
