<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 * @var \App\Model\Entity\Professor $professor
 */
use App\Model\Entity\Professor;
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Projetos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projeto form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Confirme os dados para adicionar projeto') ?></legend>
                <?php
                    echo $this->Form->control('cdProf');
                    echo $this->Form->control('cdCoord');
                    echo $this->Form->control('cdAluno');
                    echo $this->Form->control('cdAluno2');
                    echo $this->Form->control('cdAluno3');
                    echo $this->Form->control('cdAluno4');
                    echo $this->Form->control('nomeProj');
                    echo $this->Form->control('descProj');
                    echo $this->Form->date('dtInicio');
                    echo $this->Form->date('dtFim');
                    echo $this->Form->date('dtApres');
                    echo $this->Form->select('statusProj' , ['empty' => 'Escolha', '1'=> 'Em andamento','2' => 'Concluído: Aguardando apresentação a banca', '3'=> 'Aprovado', '4' => 'Reprovado']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
