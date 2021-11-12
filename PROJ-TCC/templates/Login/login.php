<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Phinx\Db\Action\Action;

?>
<div class="content">
    <div class="row">
        <div id="logo"><?=$this->Html->image('logo-completa.png',['url'=>'#'] );?></div>
    </div>
    <div id="login">
        <div class="message default text-center">
            <p>Insira seu login e senha.</p>
        </div>
        <h4 style="text-align: center;">LOGIN</h4>
            <?= $this->Form->create() ?>
            <br>
                <?= $this->Form->control(('login')); ?>
            <br>
            <br>
                <?= $this->Form->control(('password'),['placeholder'=>'senha'], ['type' => 'password']); ?>
            <br>
            <br>
                <button class="btn btn-primary button" id="buttonLogin" <?= $this->Form->submit(('Acessar')) ?> </button>
            <?= $this->Form->end(); ?>
    </div>
</div>
