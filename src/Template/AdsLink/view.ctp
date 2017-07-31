<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AdsLink $adsLink
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ads Link'), ['action' => 'edit', $adsLink->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ads Link'), ['action' => 'delete', $adsLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adsLink->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ads Link'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ads Link'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ads Content'), ['controller' => 'AdsContent', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ads Content'), ['controller' => 'AdsContent', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adsLink view large-9 medium-8 columns content">
    <h3><?= h($adsLink->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ads Content') ?></th>
            <td><?= $adsLink->has('ads_content') ? $this->Html->link($adsLink->ads_content->title, ['controller' => 'AdsContent', 'action' => 'view', $adsLink->ads_content->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adsLink->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datetime') ?></th>
            <td><?= h($adsLink->datetime) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($adsLink->url)); ?>
    </div>
</div>
