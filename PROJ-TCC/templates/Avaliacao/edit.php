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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $avaliacao->cdAvaliacao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacao->cdAvaliacao), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Avaliacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="avaliacao form content">
            <?= $this->Form->create($avaliacao) ?>
            <fieldset>
                <legend><?= __('Edit Avaliacao') ?></legend>
                <?php
                    echo $this->Form->control('comentario');
                    echo $this->Form->control('cdProj');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
