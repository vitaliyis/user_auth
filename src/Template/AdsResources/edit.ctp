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
                ['action' => 'delete', $adsResource->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adsResource->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ads Resources'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adsResources form large-9 medium-8 columns content">
    <?= $this->Form->create($adsResource) ?>
    <fieldset>
        <legend><?= __('Edit Ads Resource') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('url');
            echo $this->Form->control('login');
            echo $this->Form->control('password');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
