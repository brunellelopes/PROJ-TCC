<?php
/**
// * @var \App\View\AppView $this
 * @var \App\Model\Entity\Historico $historico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $historico->cdHist],
                ['confirm' => __('Are you sure you want to delete # {0}?', $historico->cdHist), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Historico'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="historico form content">
            <?= $this->Form->create($historico) ?>
            <fieldset>
                <legend><?= __('Edit Historico') ?></legend>
                <?php
                    echo $this->Form->control('versaoProj');
                    echo $this->Form->control('nmArquivo');
                    echo $this->Form->control('dtVersao', ['empty' => true]);
                    echo $this->Form->control('cdProj');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
