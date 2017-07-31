<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adsContent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adsContent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ads Content'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ads Link'), ['controller' => 'AdsLink', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ads Link'), ['controller' => 'AdsLink', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adsContent form large-9 medium-8 columns content">
    <?= $this->Form->create($adsContent) ?>
    <fieldset>
        <legend><?= __('Edit Ads Content') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
