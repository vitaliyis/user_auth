<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AdsResource $adsResource
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ads Resource'), ['action' => 'edit', $adsResource->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ads Resource'), ['action' => 'delete', $adsResource->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adsResource->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ads Resources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ads Resource'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adsResources view large-9 medium-8 columns content">
    <h3><?= h($adsResource->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($adsResource->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($adsResource->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($adsResource->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adsResource->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($adsResource->url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($adsResource->description)); ?>
    </div>
</div>
