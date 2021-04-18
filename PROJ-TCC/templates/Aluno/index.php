<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $aluno
 */
?>
<div class="aluno index content"></div>
    <div class="container-fluid">
            <div id="particles-container"> </div>
            <div class="wrapper">
                <nav class="navbar navbar-expand navbar-light bg-light" >
                    <!--lOGO DO PROJETO NO NAVBAR<a class="navbar-brand pull-right" ><img src="" id="brand-logo"></a>-->
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
                                    <li class="dropdown-item" id="options" href="#">Etapas para o desenvolvimento do Projeto Final Individual </a></li>
                                    <a class="dropdown-item" id="options" href="#">Modelo de cronograma</a>
                                    <a class="dropdown-item" id="options" href="#">EXEMPLO: Documentação do modelo de casos de uso</a>
                                    <a class="dropdown-item" id="options" href="#">Projeto de banco - Passo a passo (Modelo)</a>
                                </div>
                            </div>
                        <div>
                            <button type="button" class="btn btn-light" href="#" onclick="Popup()"> Histórico de Versões</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-light" href="#" onclick="PopupB()"> Projetos aprovados</button>
                        </div>
                    </div>
                    <ul class="nav justify-content-end">
                        
                    </div>
                </nav>  
            </div>
    </div>
    <br>
    <br>
    <div class="row">   
        <div class="col-md-2" id="project">
            <br>
            <label>Projetos</label>
            <div class="dropdown-divider"></div>
                <div id="envios">
                Enviar documento
                <input type="file" class="btn btn-primary btn-sm" id="addFile" >
                <br>
                <br>
                <a href="#" class="btn btn-danger btn-sm" role="button" type="Reset">Limpar</a>
                <a href="#" class="btn btn-success btn-sm" role="button" type="submit">Enviar</a>
            </div>
            <br />
                <div id="status">
                    <div class="dropdown-divider"></div>
                    <label>Status:</label>
                    <br>
                    <b>Em andamento</b>
                </div>
            </div>  
        <div class="col-md-6 align-self-center" id="feed" >
            <br />
            <label>Mural</label>
            <br />
                <section>
                <!--Placeholder para apresentação-->
                    <p id="professorFeed">Orientador: Documentação revisada. </p>
                </section>
                <div class="dropdown-divider"></div>
                <textarea id="comments" placeholder="Insira seu comentário..."></textarea>
                <button class="btn btn-success btn-lg" id="enviarcomentario">Enviar</button>
            </div>
        <div class="col-md-2" id="final">
            <br />
                <div id="checklist">
                    <label>Checklist</label>
                    <!--Placeholder para apresentação-->
                        <ul>
                            <li><input type="checkbox"> Entrega da documentação</li>
                            <li><input type="checkbox"> Finalizar frontend</li>
                            <li><input type="checkbox"> Finalizar workflow no back</li>
                            <li><input type="checkbox"> Marcar apresentação</li>
                        </ul>
                </div>
                <div class="dropdown-divider"></div>
                <div id="Note">
                    <label>Nota</label>
                    <br> 
                    <b>0.0</b>
                </div>
                <div class="dropdown-divider"></div>
                <div id="contact">
                    <label>Entre em contato com o seu orientador</label>
                        <button class="btn btn-primary btn-md" id="sendMail"><a href="mailto:teste@email.com?subject=Solicito contato" > Enviar mensagem</a></button>
                    </div>        
                </div>
            </div>
    </div>
    <!--MODAL DO HISTÓRICO DE DOCUMENTOS-->
    <div id="modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Histórico de versões</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <!--Placeholder para apresentação-->
                    <select name="historico" id="fstatus">
                        <option value="tcc-versao-11"><a href="#">TCC - Versao 11</a></option>
                        <option value="tcc-versao-10"><a href="#">TCC - Versao 10</a></option>
                        <option value="tcc-versao-9"><a href="#">TCC - Versao 9</a></option>
                        <option value="tcc-versao-8"><a href="#">TCC - Versao 8</a></option>
                        <option value="tcc-versao-7"><a href="#">TCC - Versao 7</a></option>
                        <option value="tcc-versao-6"><a href="#">TCC - Versao 6</a></option>
                        <option value="tcc-versao-5"><a href="#">TCC - Versao 5</a></option>
                        <option value="tcc-versao-4"><a href="#">TCC - Versao 4</a></option>
                        <option value="tcc-versao-3"><a href="#">TCC - Versao 3</a></option>
                        <option value="tcc-versao-2"><a href="#">TCC - Versao 2</a></option>
                        <option value="tcc-versao-1"><a href="#">TCC - Versao 1</a></option>
                    </select>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
                        <form>
                            <label for="fstatus">Selecione o ano:</label>
                            <select id="fstatus" name="fpano">
                                <option value=" "><a href="#">SELECIONE</a></option>
                                <option value="2019"><a href="#">2019</a></option>
                                <option value="2020"><a href="#">2020</a></option>
                            </select><br>
                            <label for="fstatus">Selecione o período:</label>
                            <select id="fstatus" name="fperiodo">
                                <option value=" "><a href="#">SELECIONE</a></option>
                                <option value="1"><a href="#">1</a></option>
                                <option value="2"><a href="#">2</a></option>
                            </select><br><br>
                            <a href="">SGTCC - Sistema de gerenciamento de trabalho de conclusão de curso</a>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
            </div>
        </div>
</div>
    <!--<div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdAluno') ?></th>
                    <th><?= $this->Paginator->sort('loginAluno') ?></th>
                    <th><?= $this->Paginator->sort('senhaAluno') ?></th>
                    <th><?= $this->Paginator->sort('matAluno') ?></th>
                    <th><?= $this->Paginator->sort('nomeAluno') ?></th>
                    <th><?= $this->Paginator->sort('emailAluno') ?></th>
                    <th><?= $this->Paginator->sort('cdAccount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aluno as $aluno): ?>
                <tr>
                    <td><?= $this->Number->format($aluno->cdAluno) ?></td>
                    <td><?= h($aluno->loginAluno) ?></td>
                    <td><?= h($aluno->senhaAluno) ?></td>
                    <td><?= $this->Number->format($aluno->matAluno) ?></td>
                    <td><?= h($aluno->nomeAluno) ?></td>
                    <td><?= h($aluno->emailAluno) ?></td>
                    <td><?= $this->Number->format($aluno->cdAccount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->loginAluno]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->loginAluno]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->loginAluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->loginAluno)]) ?>
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
