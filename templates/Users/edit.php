<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="col-md-3  col-sm-12">
        <div class="side-nav">
            <h4 class="fs-3 fw-bold"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listar Usuários'), ['action' => 'index'], ['class' => 'side-nav-item fs-5']) ?>
            <?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'Excluir', $user->id],
                ['confirm' => __('Você tem certesa que deseja excluir o usuário #{0}? #{0}?', $user->id), 'class' => 'side-nav-item fs-5']
            ) ?>
        </div>
    </aside>
    <div class="col-md-9 col-sm-12">
        <div class="users form content">
            <?= $this->Form->create($user, []) ?>
            <fieldset>
                <legend class="fs-2"><?= __('Editar Usuário') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control mb-3']);
                    echo $this->Form->control('email', ['class' => 'form-control mb-3']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
