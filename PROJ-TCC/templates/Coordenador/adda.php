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
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Confirme os dados para adicionar aluno') ?></legend>
                <?php
                    echo $this->Form->control('login');
                    echo $this->Form->control('password');
                    echo $this->Form->control('mat');
                    echo $this->Form->control('nome');
                    echo $this->Form->control('email');
                    echo $this->Form->control('cdAccount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
