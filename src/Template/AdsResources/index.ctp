<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AdsResource[]|\Cake\Collection\CollectionInterface $adsResources
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ads Resource'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adsResources index large-9 medium-8 columns content">
    <h3><?= __('Ads Resources') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adsResources as $adsResource): ?>
            <tr>
                <td><?= $this->Number->format($adsResource->id) ?></td>
                <td><?= h($adsResource->name) ?></td>
                <td><?= h($adsResource->login) ?></td>
                <td><?= h($adsResource->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adsResource->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adsResource->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adsResource->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adsResource->id)]) ?>
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
