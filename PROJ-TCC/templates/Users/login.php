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
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Instrucao basica para chamar o css, similar ao Js, utilizando this, uma orientacao a objeto-->
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'main']) ?>

    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            </a>
            <h1>
                FEUC-GEN TCC
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <div class="message default text-center">
                            <p>Insira seu login e senha.</p>
                        </div>
                        <!-- <div id="url-rewriting-warning" class="alert url-rewriting">
                            <ul>
                                <li class="bullet problem">
                                    URL rewriting is not properly configured on your server.<br />
                                    1) <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/installation.html#url-rewriting">Help me configure it</a><br />
                                    2) <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/development/configuration.html#general-configuration">I don't / can't use URL rewriting</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <h4>LOGIN</h4>
                        <?= $this->Form->create() ?>

                        <?= $this->Form->input(('loginAluno'),['placeholder'=>'login']) ?>
                        <br>
                        <?= $this->Form->input(('senhaAluno'),['placeholder'=>'senha']) ?>
                        <br>
                        <?= $this->Form->button(('Acessar'),['action'=>'login'],['class' => 'button float-right']) ?>
                        <?= $this->Form->end() ?>       
                    </div>
                    
                </div>
                <hr>
            </div>
        </div>
    </main>
</body>
</html>
