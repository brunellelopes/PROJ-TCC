<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->codAccount], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->codAccount], ['confirm' => __('Are you sure you want to delete # {0}?', $account->codAccount), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Account'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accounts view content">
            <h3><?= h($account->codAccount) ?></h3>
            <table>
                <tr>
                    <th><?= __('DescAccount') ?></th>
                    <td><?= h($account->descAccount) ?></td>
                </tr>
                <tr>
                    <th><?= __('CdAccount') ?></th>
                    <td><?= $this->Number->format($account->cdAccount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
