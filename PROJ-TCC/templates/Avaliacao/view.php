<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliacao $avaliacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Avaliacao'), ['action' => 'edit', $avaliacao->cdAvaliacao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Avaliacao'), ['action' => 'delete', $avaliacao->cdAvaliacao], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacao->cdAvaliacao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Avaliacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Avaliacao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="avaliacao view content">
            <h3><?= h($avaliacao->cdAvaliacao) ?></h3>
            <table>
                <tr>
                    <th><?= __('CdAvaliacao') ?></th>
                    <td><?= $this->Number->format($avaliacao->cdAvaliacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdProj') ?></th>
                    <td><?= $this->Number->format($avaliacao->cdProj) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comentario') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($avaliacao->comentario)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
