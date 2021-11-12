<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login $Login
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Login'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="Login form content">
            <?= $this->Form->create($login) ?>
            <fieldset>
                <legend><?= __('Add Login') ?></legend>
                <?php
                    echo $this->Form->control('login');
                    echo $this->Form->control('password');
                    echo $this->Form->control('cdAccount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
