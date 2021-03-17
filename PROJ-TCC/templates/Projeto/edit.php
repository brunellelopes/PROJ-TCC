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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projeto->cdProj],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->cdProj), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Projeto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projeto form content">
            <?= $this->Form->create($projeto) ?>
            <fieldset>
                <legend><?= __('Edit Projeto') ?></legend>
                <?php
                    echo $this->Form->control('loginProf');
                    echo $this->Form->control('loginCoord');
                    echo $this->Form->control('loginAluno');
                    echo $this->Form->control('loginAluno2');
                    echo $this->Form->control('loginAluno3');
                    echo $this->Form->control('loginAluno4');
                    echo $this->Form->control('nomeProj');
                    echo $this->Form->control('descrProj');
                    echo $this->Form->control('dtInicio', ['empty' => true]);
                    echo $this->Form->control('dtFim', ['empty' => true]);
                    echo $this->Form->control('dtApres', ['empty' => true]);
                    echo $this->Form->control('notaProj');
                    echo $this->Form->control('statusProj');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
