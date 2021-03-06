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
 */
#debug($logged_user);
//if ($logged_user['status'] == 0){
//   header("Location: ".$this->Html->link(['controller' => 'pages', 'action' => 'home']));
//}
$title = 'eODAA';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <?= $this->Html->css('base.css?v='.time()) ?>
    <?= $this->Html->css('style.css?v='.time()) ?>
    <?= $this->Html->css('eodaa.css?v='.time()) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $title ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <?php if($loggedIn){?>
            <span class="headerText"> Bem vindo, <?= $this->Html->link($logged_user['name'], ['controller' => 'users', 'action' => 'view', $user_id], ['class' => 'headerText']);?></span>
            <?php } ?>
            <ul class="right">
                <?php if($loggedIn) {?>
                <li> <?= $this->Html->link('Meu Perfil', ['controller' => 'users', 'action' => 'view', $user_id]); ?>
                <li><?= $this->Html->link('Favoritos', ['controller' => 'users', 'action' => 'favorites', $user_id]);?></li>
                <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']);?></li>
                <?php } else {?>
                <li><?= $this->Html->link('Cadastro', ['controller' => 'users', 'action' => 'register']);?></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
