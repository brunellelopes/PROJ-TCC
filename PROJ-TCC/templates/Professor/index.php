<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Professor[]|\Cake\Collection\CollectionInterface $professor
 * @var \App\Model\Entity\Projeto[]|\Cake\Collection\CollectionInterface $projeto
 */

use Cake\I18n\Date;
use Cake\I18n\FrozenTime;

?>
<div class="professor index content"></div>
<div class="container-fluid">
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <?=$this->Html->image('logo-feuc-site.png', ['class' => 'navbar-brand pull-right'], ['url'=>'#'], ['id'=>'brand-logo']);?>
            <hr/>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse self-align-inicial" id="navbarSupportedContent">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" >
                        Documentos de referência
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!--Placeholder para apresentação-->
                            <a class="dropdown-item" id="options" href="#">Etapas para o desenvolvimento do Projeto Final Individual </a>
                            <a class="dropdown-item" id="options" href="#">Modelo de cronograma</a>
                            <a class="dropdown-item" id="options" href="#">EXEMPLO: Documentação do modelo de casos de uso</a>
                            <a class="dropdown-item" id="options" href="#">Projeto de banco - Passo a passo (Modelo)</a>
                        </div>
                    </div>
                <div>
                    <button type="button" class="btn btn-light" href="#" onclick="PopupB()" > Projetos aprovados</button>
                </div>
            </div>
            <div class="nav justify-content-end">
                <h6> Olá,  <?= $this->$login['login']?>
                    <?= $this->Html->link(__('Sair'), ['action' => 'logout'], ['class' => 'logout']) ?>
                </h6>
            </div>
        </nav>
    </div>
    <br>
    <div class="row">   
        <div class="col-lg" id="painel" >
            <br />
            <label>Menu principal</label>
            <br />
            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="col-md-4" id="orientations">
                    <br/>
                    <label id="proflabel">Atuais orientações</label>
                    <div class="dropdown-divider"></div>
                        <ul id="list">
                            <fieldset>
                                <?php foreach ($projeto as $pj): ?>
                                    <!--Placeholder para apresentação-->
                                    <li><?php echo $pj['nomeProj'] ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </fieldset>
                </div>
                <div class="col-md-4" id="apresentations">
                    <br/>
                    <label id="proflabel">Próximas apresentações</label>
                    <div class="dropdown-divider"></div>
                    <!--Placeholder para apresentação-->
                        <ul id="list">
                            <?php foreach ($projeto as $pj): ?>
                                    <li> <?php echo ($pj['nomeProj']); ?> - <?php $pj['dataApres'] = new Date()  ; echo ($pj['dataApres']->i18nFormat('dd-MM-YYYY')); ?> </li>
                                <?php endforeach; ?>
                        </ul>
                    <br/>
                </div>
                <div class="col-md-4" id="sendProject">
                    <br/>
                    <label id="proflabel">Enviar projetos aprovados</label>
                    <div class="dropdown-divider"></div>
                    <?= $this->Form->create($professor, ['type' => 'file']) ?>
                    <?php echo $this->Form->file('file',
                        ['label'=>'addFile',
                            'class'=>'btn btn-primary btn-sm',
                            'type' => 'file', 
                            'accept' => ['application/pdf']]); ?>
                    <br />
                    <?php echo $this->Form->button('Enviar', ['class' => 'btn btn-success btn-sm'], ['action' => 'upload']) ?>
                    
                    <?php echo $this->Form->button('Reset', ['class' => 'btn btn-danger btn-sm']) ?>
                    <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
<div id="modalb" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Projetos Aprovados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                <!--Placeholder para apresentação-->
                <?= $this->form->create() ?>
                    <label for="fstatus">Selecione o ano:</label>
                    <select id="fstatus" name="fstatus">
                        <option value=""><a href="#">SELECIONE</a></option>
                        <?php foreach ($projeto as $pj): ?>
                        <?php endforeach; ?>
                            <option value=<?php if ($pj['dataApres']); ?> selected="selected"> <?php $pj['dataApres'] = new Date()  ; echo ($pj['dataApres']->i18nFormat('YYYY'));  ?> </option>
                    </select><br>
                    <label for="fstatus">Selecione o período:</label>
                        <select id="fstatus" name="fperiodo">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="1"><a href="#">1</a></option>
                            <option value="2"><a href="#">2</a></option>
                        </select><br><br>
                        <li><?php if($pj['statusProj'] == "Aprovado"); ?> <?php echo $pj['nomeProj'] ?></li>
                    <?= $this->form->end() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
</div>

<!--<div class="professor index content">
    <?= $this->Html->link(__('Logout'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('New Professor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Professor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdProf') ?></th>
                    <th><?= $this->Paginator->sort('loginProf') ?></th>
                    <th><?= $this->Paginator->sort('senhaProf') ?></th>
                    <th><?= $this->Paginator->sort('nomeProf') ?></th>
                    <th><?= $this->Paginator->sort('emailProf') ?></th>
                    <th><?= $this->Paginator->sort('celProf') ?></th>
                    <th><?= $this->Paginator->sort('cdAccount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professor as $professor): ?>
                <tr>
                    <td><?= $this->Number->format($professor->cdProf) ?></td>
                    <td><?= h($professor->loginProf) ?></td>
                    <td><?= h($professor->senhaProf) ?></td>
                    <td><?= h($professor->nomeProf) ?></td>
                    <td><?= h($professor->emailProf) ?></td>
                    <td><?= h($professor->celProf) ?></td>
                    <td><?= $this->Number->format($professor->cdAccount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $professor->loginProf]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $professor->loginProf]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $professor->loginProf], ['confirm' => __('Are you sure you want to delete # {0}?', $professor->loginProf)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>-->
