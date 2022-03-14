<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">

    <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'btn btn-outline-primary float-end']) ?>

    <h3><?= __('Usuários') ?></h3>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td data-label="id">#<?= $this->Number->format($user->id) ?></td>
                        <td data-label="nome"><?= h($user->nome) ?></td>
                        <td data-label="email"><?= h($user->email) ?></td>
                        <td data-label="" class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class' => 'btn']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn']) ?>
                            <?= $this->Form->postLink(__('excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Você tem certesa que deseja excluir o usuário #{0}?', $user->id), 'class' => 'btn btn-danger']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    
    <div class="">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->prev('<< ') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(' >>') ?>
        </ul>

        <p  class="text-end"><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')) ?></p>
    </div>
</div>