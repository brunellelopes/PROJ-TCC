<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordenador[]|\Cake\Collection\CollectionInterface $coordenador
 */
?>

<div class="container-fluid">
<div id="particles-container"></div>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <!--<a id="brand-logo"><?=$this->Html->image('logo-png.png');?></a>-->
            <hr />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse self-align-inicial" id="navbarSupportedContent">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" >
                        Documentos de referência
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" id="options" href="#">Etapas para o desenvolvimento do Projeto Final Individual </a>
                            <a class="dropdown-item" id="options" href="#">Modelo de cronograma</a>
                            <a class="dropdown-item" id="options" href="#">EXEMPLO: Documentação do modelo de casos de uso</a>
                            <a class="dropdown-item" id="options" href="#">Projeto de banco - Passo a passo (Modelo)</a>
                        </div>
                    </div>
                <div>
                    <button type="button" class="btn btn-light" <?=$this->Html->script('main', ['block' => 'PopUp']); ?>"> Gerar relatório</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light" href="#" onclick="PopupB()"> Projetos aprovados</button>
                </div>
            </div>
            <div class="nav justify-content-end">
                <!--<h6> Olá, <!--Inserir instrucao pra retornar nome do coordenador. <a class="logout" href=Logout</a></h6>-->
            </div>
        </nav>
    </div>
    <br>
    <div class="row">   
        <div class="col-md-9" id="painelCoord">
            <br />
            <label>Painel</label>
            <br />
            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="col-md-4 " id="student">
                    <br/>
                    <label id="proflabel">Novo aluno</label>
                    <div class="dropdown-divider"></div>
                        <br/> 
                        <a href="#" class="btn btn-outline-success btn-md" onclick="PopupC()">Cadastrar</a>
                        <a href="#" class="btn btn-outline-warning btn-md" onclick="PopupF()">Alterar</a>
                    <br/>
                </div>
                <div class="col-md-4" id="newProfessor">
                    <br/>
                    <label id="proflabel">Novo professor</label>
                    <div class="dropdown-divider"></div>
                        <br/>
                        <a href="#" class="btn btn-outline-success btn-md" onclick="PopupD()">Cadastrar</a>
                        <a href="#" class="btn btn-outline-warning btn-md" onclick="PopupG()">Alterar</a>
                </div>
                <div class="col-md-4" id="approved">
                    <br/>
                    <label id="proflabel">Novo projeto</label>
                    <div class="dropdown-divider"></div>
                        <br/>
                        <a href="#" class="btn btn-outline-success btn-md" onclick="PopupE()">Cadastrar</a>
                        <a href="#" class="btn btn-outline-warning btn-md" onclick="PopupH()">Alterar</a>
                </div>
                <div class="col-md-4" id="sendDoc">
                    <br/>
                    <label id="proflabel">Enviar documentos de referência</label>
                    <div class="dropdown-divider"></div>
                        <input type= "file" class="btn btn-outline-primary btn-md " id="addFile" >
                        <br/>
                        <br/>
                        <a href="#" class="btn btn-outline-success btn-md" role="button" type="submit">Enviar</a>
                        <a href="#" class="btn btn-outline-danger btn-md" role="button" type="Reset">Limpar</a>
                </div>
            </div>
        </div>
    </div>
    <!--MODAL DO HISTÓRICO DE DOCUMENTOS-->
    <div id="modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gerar relatório</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <form>
                        <label for="fpstatus">Selecione o relatório:</label>
                        <select id="fpstatus" name="fpstatus">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="aprovado"><a href="#">Aprovados</a></option>
                            <option value="reprovado"><a href="#">Reprovados</a></option>
                            <option value="maiores-notas"><a href="#">Maiores notas</a></option>
                            <option value="aguardando"><a href="#">Aguardando apresentação</a></option>
                        </select><br>
                    </form><br><br>
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
                    <h5 class="modal-title">Projetos aprovados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <form>
                        <label for="fastatus">Selecione o ano:</label>
                        <select id="fastatus" name="fastatus">
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
    <div id="modalc" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <!--placeholder será alterado-->
                    <form>
                        <label for="fsmatricula">Matrícula:</label>
                        <input type="text" id="fsmatricula" name="fsmatricula"><br>
                        <label for="fsnomecompleto">Nome completo:</label>
                        <input type="text" id="fsnomecompleto" name="fsnomecompleto"><br>
                        <label for="fslogin">Login:</label>
                        <input type="text" id="fslogin" name="fsogin"><br>
                        <label for="fssenha">Senha:</label>
                        <input type="password" id="fssenha" name="fssenha"><br>
                        <label for="fsemail">Email:</label>
                        <input type="text" id="fsemail" name="fsemail"><br><br>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modald" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo professor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <!--placeholder será alterado-->
                    <form>
                        <label for="fnomecompleto">Nome completo:</label>
                        <input type="text" id="fnomecompleto" name="fnomecompleto"><br>
                        <label for="flogin">Login:</label>
                        <input type="text" id="flogin" name="flogin"><br>
                        <label for="fsenha">Senha:</label>
                        <input type="password" id="fsenha" name="fsenha"><br>
                        <label for="femail">Email:</label>
                        <input type="text" id="femail" name="femail"><br>
                        <label for="flogin">Telefone:</label>
                        <input type="text" id="flogin" name="flogin"><br><br>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modale" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo projeto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <!--placeholder será alterado-->
                    <form>
                        <label for="floginProfessor">Login professor:</label>
                        <input type="text" id="floginProfessor" name="floginProfessor"><br>

                        <label for="floginAluno1">Login aluno 1:</label>
                        <input type="text" id="floginAluno1" name="floginAluno1"><br>

                        <label for="floginAluno2">Login aluno 2 (opcional):</label>
                        <input type="text" id="floginAluno2" name="floginAluno2"><br>

                        <label for="floginAluno3">Login aluno 3 (opcional):</label>
                        <input type="text" id="floginAluno3" name="floginAluno3"><br>

                        <label for="floginAluno4">Login aluno 4 (opcional):</label>
                        <input type="text" id="floginAluno4" name="floginAluno4"><br>

                        <label for="fnomeProj">Nome do projeto:</label>
                        <input type="text" id="fnomeProj" name="fnomeProj"><br>

                        <label for="fdescproj">Descrição do projeto:</label>
                        <input type="text" id="fdescproj" name="fdescproj"><br>

                        <label for="fstartdate">Data de início:</label>
                        <input type="date" id="fstartdate" name="fstartdate"><br>

                        <label for="fenddate">Data de fim:</label>
                        <input type="date" id="fstartdate" name="fstartdate"><br>

                        <label for="fapresdate">Data de apresentação:</label>
                        <input type="date" id="fapresdate" name="fapresdate"><br>

                        <label for="fstatus">Status do projeto:</label>
                        <select id="fstatus" name="fstatus">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="em-andamento"><a href="#">Em andamento</a></option>
                            <option value="concluido-aguardando"><a href="#">Concluído: Aguardando apresentação a banca</a></option>
                            <option value="concluido-aprovado"><a href="#">Aprovado</a></option>
                            <option value="concluido-reprovado"><a href="#">Reprovado</a></option>
                        </select><br><br>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modalf" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar dados do Aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <!--placeholder será alterado-->
                    <form>
                        <label for="fstatus">Login:</label>
                        <select id="fstatus" name="fstatus">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="Brunelle"><a href="#">Brunelle</a></option>
                        </select><br>
                        <label for="fsmatricula">Matrícula:</label>
                        <input type="text" id="fsmatricula" name="fsmatricula" value="15010462" readonly><br>
                        <label for="fsnomecompleto">Nome completo:</label>
                        <input type="text" id="fsnomecompleto" name="fsnomecompleto" value="Brunelle Lopes" readonly><br>
                        <label for="fslogin">Login:</label>
                        <input type="text" id="fslogin" name="fsogin" value="Brunelle" readonly><br>
                        <label for="fssenha">Senha:</label>
                        <input type="password" id="fssenha" name="fssenha"><br>
                        <label for="fsemail">Email:</label>
                        <input type="text" id="fsemail" name="fsemail" value="brunellelopes@gmail.com" readonly><br><br>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modalg" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar dados do professor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <!--placeholder será alterado-->
                    <form>
                        <label for="fstatus">Login:</label>
                        <select id="fstatus" name="fstatus">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="Brunelle"><a href="#">Brunelle</a></option>
                        </select><br>
                        <label for="fmatricula">Matrícula:</label>
                        <input type="text" id="fmatricula" name="fmatricula" value="15010462" readonly><br>
                        <label for="fnomecompleto">Nome completo:</label>
                        <input type="text" id="fnomecompleto" name="fnomecompleto" value="Brunelle Lopes" readonly><br>
                        <label for="flogin">Login:</label>
                        <input type="text" id="flogin" name="flogin" value="Brunelle" readonly><br>
                        <label for="fsenha">Senha:</label>
                        <input type="password" id="fsenha" name="fsenha"><br>
                        <label for="femail">Email:</label>
                        <input type="text" id="femail" name="femail" value="brunellelopes@gmail.com" readonly><br>
                        <label for="flogin">Telefone:</label>
                        <input type="text" id="flogin" name="flogin" value="4002-8922"><br><br>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modalh" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar dados do projeto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO--></p>
                    <!--placeholder será alterado-->
                    <form>
                        <label for="fcodigo">Código de projeto:</label>
                        <select id="fcodigo" name="fcodigo">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="20200801"><a href="#">20200801</a></option>
                        </select><br>

                        <label for="fstatus">Login professor:</label>
                        <select id="fstatus" name="fstatus">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="Brunelle"><a href="#">Brunelle</a></option>
                        </select><br>

                        <label for="floginAluno1">Login aluno 1:</label>
                        <input type="text" id="floginAluno1" name="floginAluno1" value="Brunelle" readonly><br>

                        <label for="floginAluno2">Login aluno 2 (opcional):</label>
                        <input type="text" id="floginAluno2" name="floginAluno2" value="Rafael"><br>

                        <label for="floginAluno3">Login aluno 3 (opcional):</label>
                        <input type="text" id="floginAluno3" name="floginAluno3"><br>

                        <label for="floginAluno4">Login aluno 4 (opcional):</label>
                        <input type="text" id="floginAluno4" name="floginAluno4"><br>

                        <label for="fnomeProj">Nome do projeto:</label>
                        <input type="text" id="fnomeProj" name="fnomeProj" value="SGTCC - Sistema de gerenciamento de trabalho de conclusão de curso"><br>

                        <label for="fdescproj">Descrição do projeto:</label>
                        <input type="text" id="fdescproj" name="fdescproj" ><br>

                        <label for="fstartdate">Data de início:</label>
                        <input type="date" id="fstartdate" name="fstartdate"><br>

                        <label for="fenddate">Data de fim:</label>
                        <input type="date" id="fstartdate" name="fstartdate" ><br>

                        <label for="fapresdate">Data de apresentação:</label>
                        <input type="date" id="fapresdate" name="fapresdate" ><br>

                        <label for="fstatus">Status do projeto:</label>
                        <select id="fstatus" name="fstatus">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value="em-andamento"><a href="#">Em andamento</a></option>
                            <option value="concluido-aguardando"><a href="#">Concluído: Aguardando apresentação a banca</a></option>
                            <option value="concluido-aprovado"><a href="#">Aprovado</a></option>
                            <option value="concluido-reprovado"><a href="#">Reprovado</a></option>
                        </select><br><br>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<div class="coordenador index content">
    <?= $this->Html->link(__('New Coordenador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coordenador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cdCoord') ?></th>
                    <th><?= $this->Paginator->sort('loginCoord') ?></th>
                    <th><?= $this->Paginator->sort('senhaCoord') ?></th>
                    <th><?= $this->Paginator->sort('nomeCoord') ?></th>
                    <th><?= $this->Paginator->sort('emailCoord') ?></th>
                    <th><?= $this->Paginator->sort('cdAccount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coordenador as $coordenador): ?>
                <tr>
                    <td><?= $this->Number->format($coordenador->cdCoord) ?></td>
                    <td><?= h($coordenador->loginCoord) ?></td>
                    <td><?= h($coordenador->senhaCoord) ?></td>
                    <td><?= h($coordenador->nomeCoord) ?></td>
                    <td><?= h($coordenador->emailCoord) ?></td>
                    <td><?= $this->Number->format($coordenador->cdAccount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coordenador->loginCoord]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordenador->loginCoord]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coordenador->loginCoord], ['confirm' => __('Are you sure you want to delete # {0}?', $coordenador->loginCoord)]) ?>
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
