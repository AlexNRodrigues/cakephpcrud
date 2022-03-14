<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP CRUD';
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


    <?= $this->Html->css(['normalize.min', 'bootstrap.min', 'cake']) ?>

</head>

<body>
    <div class="container">
  
    <nav class="d-flex text-center justify-content-between p-4 mb-4">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>" class="fw-bold"><span>Cake</span>PHP CRUD</a>
        </div>
        <div class="top-nav-links">
            <a rel="noopener" href="<?= $this->Url->build('/') ?>" class="fs-4">Home</a>
            <a rel="noopener" href="<?= $this->Url->build('/users') ?>" class="fs-4">Usuários</a>
        </div>
    </nav>
    </div>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>