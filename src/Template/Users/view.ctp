<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \App\Model\Entity\KnowledgeArea $knowledge_area
 */

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
<script>
    $(function() {
        $('#profile-image1').on('click', function() {
            $('#profile-image-upload').click();
        });
    });       
</script> 

<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Access Levels'), ['controller' => 'AccessLevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Access Level'), ['controller' => 'AccessLevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-10 medium-8 columns content">

    <!-- USER PROFILE -->
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 >Perfil</h4>
                    </div>
                    <div class="panel-body">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="col-sm-3">
                                    <div  align="center"> 
                                        <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive img-profile"> 
                                        <input id="profile-image-upload" class="hidden" type="file">
                                        <div style="color:#999;font-size:12px;margin-top:3px">escolher imagem</div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-7">
                                    <h4 style="color:#00b1b1;margin-bottom:0px"><?= h($user->name); ?></h4>
                                </div>
                                <div class="col-sm-2">
                                    <h4><a href="/eODAA/users/edit/<?=$user->id?>">Editar Perfil</a></h4>
                                </div>

                                <div class="clearfix"></div>

                                <hr style="margin:5px 0 5px 0;">

                                <div class="col-sm-3 col-xs-6 tital">Nome:</div>
                                <div class="col-sm-9 col-xs-6"><?= h($user->name); ?></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-3 col-xs-6 tital " >E-mail:</div>
                                <div class="col-sm-9 col-xs-6"><?= h($user->email); ?></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-3 col-xs-6 tital">Escolaridade:</div>
                                <div class="col-sm-9 col-xs-6"><?= h($user->scholarity); ?></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-3 col-xs-6 tital">Membro desde:</div>
                                <div class="col-sm-9 col-xs-6"><?= strftime('%d de %B de %Y', time(h($user->created))); ?></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <hr style="margin:5px 0 5px 0;">
                                <br>
                                <h4><?= __('Cursos Relacionados') ?> </h4>
                                <?php if (!empty($user->courses)): ?>
                                <table cellpadding="0" cellspacing="0" class="tabelaCursos">
                                    <tr>
                                        <th scope="col" style="width:20%"><?= __('Curso') ?></th>
                                        <th scope="col" style="width:20%"><?= __('Área') ?></th>
                                        <th scope="col" style="width:20%"><?= __('Insituição') ?></th>
                                        <th scope="col" style="width:40%"><?= __('Descrição') ?></th>
                                    </tr>
                                    <?php foreach ($user->courses as $courses): ?>
                                    <tr>
                                        <td><?= h($courses->name) ?></td>
                                        <td><?= h($courses->knowledge_area->name)?></td>
                                        <td><?= h($courses->educational_institution->name) ?></td>
                                        <td><?= h($courses->description) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>

                            <?php endif; ?>
                            <!-- /.box-body -->
                            </div>
                        <!-- /.box -->
                        </div>
                    </div> 
                </div>
            </div>  
        </div>
    </div>
</div>
