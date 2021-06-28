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
            <?= $this->Html->link(__('List Avaliacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="avaliacao form content">
            <?= $this->Form->create($avaliacao) ?>
            <fieldset>
                <legend><?= __('Add Avaliacao') ?></legend>
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
