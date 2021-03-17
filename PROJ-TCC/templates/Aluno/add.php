<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aluno'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aluno form content">
            <?= $this->Form->create($aluno) ?>
            <fieldset>
                <legend><?= __('Add Aluno') ?></legend>
                <?php
                    echo $this->Form->control('loginAluno');
                    echo $this->Form->control('senhaAluno');
                    echo $this->Form->control('matAluno');
                    echo $this->Form->control('nomeAluno');
                    echo $this->Form->control('emailAluno');
                    echo $this->Form->control('codAccount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
