<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

        <li><?= $this->Html->link(__('Material didático'), ['action' => 'materialdidatico']) ?></li>

        <li><?= $this->Html->link(__('Minha agenda (aluno)'), ['action' => 'schedulealuno']) ?></li>

    </ul>
</nav>
<div class="courses index large-10 medium-8 columns content">
    <h3><?= __('Minha agenda (professor)') ?></h3>

<h5 class="text-left">Consultar agenda</h5>
<select style="width: 50px;">
    <div class="courses index large-2 medium-2 columns content">
    <label>Dia</label>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">00</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>

<select style="width: 100px;">
    <div class="courses index large-2 medium-2 columns content">
    <label>Dia</label>
  <option value="Janeiro">Janeiro</option>
  <option value="Fevereiro">Fevereiro</option>
  <option value="Março">Março</option>
  <option value="Abril">Abril</option>
  <option value="Maio">Maio</option>
  <option value="Junho">Junho</option>
  <option value="Julho">Julho</option>
  <option value="Agosto">Agosto</option>
  <option value="Setembro">Setembro</option>
  <option value="Outubro">Outubro</option>
  <option value="Novembro">Novembro</option>
  <option value="Dezembro">Dezembro</option>
</select>

<select style="width: 100px;">
    <div class="courses index large-2 medium-2 columns content">
    <label>Dia</label>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
</select>
<br>
<div>
  <a class="button">
    <label>Consultar</label>
  </a>
</div>

<br>


<div class="centralizar_botao">
    <a class="button">
    <label>Listar todas as aulas contratadas</label>
    </a>
</div>
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('knowledge_area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('educational_institution_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>

</div>
