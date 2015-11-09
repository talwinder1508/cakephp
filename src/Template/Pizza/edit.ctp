<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pizza->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pizza->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pizza form large-9 medium-8 columns content">
    <?= $this->Form->create($pizza) ?>
    <fieldset>
        <legend><?= __('Edit Pizza') ?></legend>
        <?php
            echo $this->Form->input('cust_name');
            echo $this->Form->input('email');
            echo $this->Form->input('telephone');
            echo $this->Form->input('address');
            echo $this->Form->input('city');
            echo $this->Form->input('province');
            echo $this->Form->input('pizzasize');
            echo $this->Form->input('crusttype');
            echo $this->Form->input('toppings');
            echo $this->Form->input('delivery');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
