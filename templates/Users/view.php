<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="col-md-3 col-sm-12">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item fs-5']) ?>
            <?= $this->Form->postLink(__('excluir Usuário'), ['action' => 'delete', $user->id], ['confirm' => __('Você tem certesa que deseja excluir o usuário #{0}?', $user->id), 'class' => 'side-nav-item fs-5']) ?>
            <?= $this->Html->link(__('Listar Usuários'), ['action' => 'index'], ['class' => 'side-nav-item fs-5']) ?>
            <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'side-nav-item fs-5']) ?>
        </div>
    </aside>
    <div class="col-md-9 col-sm-12">
        <div class="users view content">
            <h3>#<?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th class="fs-4"><?= __('Nome') ?></th>
                    <td><?= h($user->nome) ?></td>
                </tr>
                <tr>
                    <th class="fs-4"><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th class="fs-4"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th class="fs-4"><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th class="fs-4"><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
