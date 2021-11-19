<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordenador[]|\Cake\Collection\CollectionInterface $coordenador
 * @var \App\Model\Entity\Professor[]|\Cake\Collection\CollectionInterface $professor
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $aluno
 * @var \App\Model\Entity\Professor $professor

 */

?>


<div class="coordenador index content"></div>
<div class="container-fluid">
    <div id="particles-container"></div>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--<a id="brand-logo"><?= $this->Html->image('logo-png.png'); ?></a>-->
            <hr />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse self-align-inicial" id="navbarSupportedContent">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true">
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
                    <button type="button" class="btn btn-light" href="#" onclick="Popup()"> Gerar relatório</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light" href="#" onclick="PopupB()"> Projetos aprovados</button>
                </div>
            </div>
            <div class="nav justify-content-end">
                <h6> Olá,
                    <!--Inserir instrucao pra retornar nome do coordenador.--><?= $this->Html->link(__('Sair'), ['action' => 'logout'], ['class' => 'logout']) ?>
                </h6>
            </div>
        </nav>
    </div>
    <br>
    <div class="row">
        <div class="col-lg" id="painelCoord">
            <br />
            <label>Menu principal</label>
            <br />
            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="col-md-4 " id="student">
                    <br />
                    <label id="proflabel">Alunos</label>
                    <div class="dropdown-divider"></div>
                    <br />
                    <a href="#" class="btn btn-success btn-sm" onclick="PopupC()">Cadastrar</a>
                    <a href="#" class="btn btn-warning btn-sm" onclick="PopupF()">Alterar</a>
                    <br />
                </div>
                <div class="col-md-4" id="newProfessor">
                    <br />
                    <label id="proflabel">Professores</label>
                    <div class="dropdown-divider"></div>
                    <br />
                    <a href="#" class="btn btn-success btn-sm" onclick="PopupD()">Cadastrar</a>
                    <!-- <?= $this->Html->link(__('Alterar'), ['action' => 'PopupG()'], ['class' => 'btn btn-warning btn-sm'], ['onclick' => 'edit_Professor']) ?> -->
                    <a href="#" class="btn btn-warning btn-sm" onclick="PopupG()">Alterar</a>
                </div>
                <div class="col-md-4" id="approved">
                    <br />
                    <label id="proflabel">Projetos</label>
                    <div class="dropdown-divider"></div>
                    <br />
                    <a href="#" class="btn btn-success btn-sm" onclick="PopupE()">Cadastrar</a>
                    <a href="#" class="btn btn-warning btn-sm" onclick="PopupH()">Alterar</a>
                </div>
                <div class="col-md-4" id="sendDoc">
                    <br />
                    <label id="proflabel">Documentos de referência</label>
                    <?= $this->Form->create($coordenador, ['type' => 'file']) ?>
                    <div class="dropdown-divider"></div>
                    <label for="addFile" class="btn btn-primary btn-sm"><?php echo $this->Form->file('file', ['type' => 'file', 'accept' => 'application/pdf']); ?></label>
                    <br />
                    <?php echo $this->Form->button('Enviar', ['class' => 'btn btn-success btn-sm'], ['action' => 'upload']) ?>
                    <?php echo $this->Form->button('Reset', ['class' => 'btn btn-danger btn-sm']) ?>
                    <?= $this->Form->end(); ?>
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
                    <p>
                        <!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO-->
                    </p>
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
                    <p>
                        <!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO-->
                    </p>
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
                    <p>
                        <!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO-->
                    </p>
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
                    <p>
                        <!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO-->
                    </p>
                    <!--placeholder será alterado-->
                    <?= $this->Form->create($professor) ?>
                    <?php
                    echo $this->Form->control(('loginProf'), ['placeholder' => 'Login', 'type' => 'text', 'id' => 'flogin']);
                    echo $this->Form->control(('senhaProf'), ['placeholder' => 'Senha', 'type' => 'password', 'id' => 'fsenha']);
                    echo $this->Form->control(('nomeProf'), ['placeholder' => 'Nome completo', 'type' => 'text', 'id' => 'fnomecompleto']);
                    echo $this->Form->control(('emailProf'), ['placeholder' => 'Email', 'type' => 'text', 'id' => 'femail']);
                    echo $this->Form->control('cdAccount');
                    ?>
                    <?= $this->Html->link(__('Salvar'), ['action' => 'addp'], ['class' => 'btn btn-success']) ?>
                    <?= $this->Form->end(); ?>
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
                    <p>
                        <!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO-->
                    </p>
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
                    <?= $this->Form->create($aluno); ?>
                    <p>
                        <!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO-->
                    </p>
                    <!--placeholder será alterado-->
                    <label for="fstatus">Login:</label>
                    <select id="fstatus" name="fstatus">
                        <?php foreach ($aluno as $a) : ?>
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <option value=<?php if ($a['loginAluno']); ?> selected="selected"> <?php echo ($a['loginAluno']); ?> </option>
                    </select><br>
                        <label for="fsmatricula">Matrícula:</label>
                        <input type="text" id="fsmatricula" name="fsmatricula" value="<?php echo ($a['matAluno']); ?>" readonly> <br>
                        <label for="fsnomecompleto">Nome completo:</label>
                        <input type="text" id="fsnomecompleto" name="fsnomecompleto" value="<?php echo ($a['nomeAluno']); ?>" readonly><br>
                        <label for="fssenha">Senha:</label>               
                        <?php echo $this->Form->control(('NovaSenha: '), ['placeholder' => 'Nova senha', 'type' => 'password', 'id' => 'fssenha']); ?>
                        <label for="fsemail">Email:</label>
                        <input type="text" id="fsemail" name="fsemail" value="<?php echo ($a['emailAluno']); ?>" readonly><br><br>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    <?php endforeach; ?>
                <?= $this->Form->end(); ?>
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
                    <p>
                        <!--INCLUIR AQUI EVENTO PARA LISTAR DO BANCO-->
                    </p>
                    <!--placeholder será alterado-->
                    <?= $this->Form->create($professor) ?>
                        <label for="fstatus">Login:</label>
                        <select id="fstatus" name="fstatus">
                            <option value=" " a href="#" selected="selected">SELECIONE</a></option>
                            <?php foreach ($professor as $p) : ?>
                                <option value=<?php if (!empty($p['loginProf'] != null)) : echo ($p['cdProf']);
                                                endif; ?>>
                                    <?php echo ($p['loginProf']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select><br>
                        <!-- <td><?= $this->Number->format($professor->cdProf); ?></td> -->
                        <label for="fnomecompleto">Nome completo:</label>
                        <input type="text" id="fnomecompleto" name="<?php echo $p['nomeProf']; ?>" value="<?php if (!empty($p['loginProf'])) : echo ($p['nomeProf']); endif; ?>" readonly>
                        <?php echo $this->Form->control(('nomeCompleto: '), ['placeholder' => 'Nome completo', 'type' => 'text', 'id' => 'fnomecompleto']); ?> <br>
                        <br>
                        <label for="flogin">Login:</label>
                        <input type="text" id="flogin" name="flogin" value=<?php echo ($p['loginProf']) ?> readonly><br>
                        <br>
                        <?php echo $this->Form->control(('NovaSenha: '), ['placeholder' => 'Nova senha', 'type' => 'password', 'id' => 'fsenha']); ?>
                        <br>
                        <input type="text" id="femail" name="femail" value=<?php echo ($p['emailProf']); ?> readonly>
                        <br>
                        <label for="flogin">Telefone:</label>
                        <input type="text" id="flogin" name="flogin" value="<?php echo ($p['celProf']); ?>" readonly>
                        <?php echo $this->Form->control(('celProf'), ['placeholder' => 'Telefone', 'type' => 'text', 'id' => 'fcel']); ?> <br><br>
                        <br>
                        <!-- <?= $this->Html->link(__('Salvar'), ['controller' => 'coordenador'], ['action' => 'editp', $professor->loginProf], ['class' => 'btn btn-success']) ?> -->
                        <?= $this->Form->end(); ?>
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
                    <!--placeholder será alterado-->
                    <?= $this->Form->create($projeto); ?>   
                        <label for="fcodigo">Código de projeto:</label>
                        <select id="fcodigo" name="fcodigo">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <?php foreach ($projeto as $pj) : ?>
                                <option value=<?php if (!empty($pj['cdProj'] != null)) : echo ($p['cdProj']);
                                                endif; ?>>
                                    <?php echo ($pj['cdProj']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select><br>
                        <label for="fstatus">Login professor:</label>
                        <select id="fstatus" name="fstatus">
                            <option value=" "><a href="#">SELECIONE</a></option>
                            <?php foreach ($professor as $p) : ?>
                                <?php foreach ($projeto as $pj) : ?>
                                    <option value=<?php if (!empty($pj['cdProf'] != null)) : echo ($p['cdProf']);
                                                endif; ?>>
                                        <?php echo ($p['nomeProf']); ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </select><br>

                        <label for="floginAluno1">Login aluno 1:</label>
                        <input type="text" id="floginAluno1" name="floginAluno1" value="<?php if (!empty($pj['cdAluno'])) : echo ($a['loginAluno']); endif; ?>" readonly><br>
                        
                        <label for="floginAluno2">Login aluno 2 (opcional):</label>
                            <input type="text" id="floginAluno2" name="floginAluno2" value="<?php if (!empty($pj['cdAluno2'])) : echo ($a['loginAluno']); else : echo ("Sem aluno");  endif; ?>"readonly><br>
                                <select id="floginAluno2" name="floginAluno2">
                                <?php foreach ($aluno as $a) : ?>
                                    <option value=" "><a href="#">SELECIONE</a></option>
                                    <option value=<?php if ($a['loginAluno']); ?>> <?php echo ($a['loginAluno']); ?> </option>
                                    <?php endforeach; ?>
                                </select><br>

                        <label for="floginAluno3">Login aluno 3 (opcional):</label>
                            <input type="text" id="floginAluno3" name="floginAluno3" value="<?php if (!empty($pj['cdAluno3'])) : echo ($a['loginAluno']); else : echo ("Sem aluno");  endif; ?>" readonly><br><br>
                                <select id="floginAluno3" name="floginAluno3">
                                <?php foreach ($aluno as $a) : ?>
                                    <option value=" "><a href="#">SELECIONE</a></option>
                                    <option value=<?php if ($a['loginAluno']); ?>> <?php echo ($a['loginAluno']); ?> </option>
                                    <?php endforeach; ?>
                                </select><br>

                        <label for="floginAluno4">Login aluno 4 (opcional):</label>
                            <input type="text" id="floginAluno4" name="floginAluno4" value="<?php if (!empty($pj['cdAluno4'])) : echo ($a['loginAluno']); else : echo ("Sem aluno"); endif; ?>" readonly><br>
                            <select id="floginAluno4" name="floginAluno4">
                            <?php foreach ($aluno as $a) : ?>
                                <option value=" "><a href="#">SELECIONE</a></option>
                                <option value=<?php if ($a['loginAluno']); ?>> <?php echo ($a['loginAluno']); ?> </option>
                                <?php endforeach; ?>
                            </select><br>
                        
                            <label for="fnomeProj">Nome do projeto:</label>
                        <input type="text" id="fnomeProj" name="fnomeProj" value="<?php if (!empty($pj['cdProj'])) : echo ($pj['nomeProj']); endif; ?>" readonly><br><br>
                        <?php echo $this->Form->control(('NovoNomeDeProjeto: '), ['placeholder' => 'Nome de projeto', 'type' => 'text', 'id' => 'fnomeProj']); ?> <br>

                        <label for="fdescproj">Descrição do projeto:</label>
                        <input type="text" id="fdescproj" name="fdescproj" value="<?php if (!empty($pj['descrProj'])) : echo ($pj['descrProj']); else : echo ("Sem descrição"); endif; ?>" readonly><br>
                        <?php echo $this->Form->control(('NovaDescriçãoDeProjeto: '), ['placeholder' => 'Descrição de projeto', 'type' => 'text', 'id' => 'fdescproj']); ?> <br>

                        <label for="fstartdate">Data de início:</label>
                        <input type="date" id="fstartdate" name="fstartdate" value="<?php if (!empty($pj['dtInicio'])) : echo ($pj['dtInicio']); endif; ?>"><br>

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
                    <?= $this->Form->end(); ?>
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
                <?php foreach ($coordenador as $coordenador) : ?>
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