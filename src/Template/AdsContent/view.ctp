<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AdsContent $adsContent
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ads Content'), ['action' => 'edit', $adsContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ads Content'), ['action' => 'delete', $adsContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adsContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ads Content'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ads Content'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ads Link'), ['controller' => 'AdsLink', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ads Link'), ['controller' => 'AdsLink', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adsContent view large-9 medium-8 columns content">
    <h3><?= h($adsContent->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($adsContent->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adsContent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($adsContent->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($adsContent->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ads Link') ?></h4>
        <?php if (!empty($adsContent->ads_link)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ads Content Id') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Datetime') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($adsContent->ads_link as $adsLink): ?>
            <tr>
                <td><?= h($adsLink->id) ?></td>
                <td><?= h($adsLink->ads_content_id) ?></td>
                <td><?= h($adsLink->url) ?></td>
                <td><?= h($adsLink->datetime) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AdsLink', 'action' => 'view', $adsLink->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AdsLink', 'action' => 'edit', $adsLink->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AdsLink', 'action' => 'delete', $adsLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adsLink->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
