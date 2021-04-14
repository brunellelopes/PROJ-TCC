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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coordenador->loginCoord],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coordenador->loginCoord), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Coordenador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coordenador form content">
            <?= $this->Form->create($coordenador) ?>
            <fieldset>
                <legend><?= __('Edit Coordenador') ?></legend>
                <?php
                    echo $this->Form->control('loginCoord');
                    echo $this->Form->control('senhaCoord');
                    echo $this->Form->control('nomeCoord');
                    echo $this->Form->control('emailCoord');
                    echo $this->Form->control('cdAccount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
