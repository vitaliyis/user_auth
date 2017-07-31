<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AdsLink[]|\Cake\Collection\CollectionInterface $adsLink
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ads Link'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ads Content'), ['controller' => 'AdsContent', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ads Content'), ['controller' => 'AdsContent', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adsLink index large-9 medium-8 columns content">
    <h3><?= __('Ads Link') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ads_content_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datetime') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adsLink as $adsLink): ?>
            <tr>
                <td><?= $this->Number->format($adsLink->id) ?></td>
                <td><?= $adsLink->has('ads_content') ? $this->Html->link($adsLink->ads_content->title, ['controller' => 'AdsContent', 'action' => 'view', $adsLink->ads_content->id]) : '' ?></td>
                <td><?= h($adsLink->datetime) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adsLink->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adsLink->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adsLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adsLink->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
