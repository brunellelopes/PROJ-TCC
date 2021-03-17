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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $professor->loginProf],
                ['confirm' => __('Are you sure you want to delete # {0}?', $professor->loginProf), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Professor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="professor form content">
            <?= $this->Form->create($professor) ?>
            <fieldset>
                <legend><?= __('Edit Professor') ?></legend>
                <?php
                    echo $this->Form->control('senhaProf');
                    echo $this->Form->control('nomeProf');
                    echo $this->Form->control('emailProf');
                    echo $this->Form->control('celProf');
                    echo $this->Form->control('codAccount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
