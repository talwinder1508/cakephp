<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pizza'), ['action' => 'edit', $pizza->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pizza'), ['action' => 'delete', $pizza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pizza->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pizza'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pizza view large-9 medium-8 columns content">
    <h3><?= h($pizza->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cust Name') ?></th>
            <td><?= h($pizza->cust_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($pizza->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Telephone') ?></th>
            <td><?= h($pizza->telephone) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($pizza->address) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($pizza->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Province') ?></th>
            <td><?= h($pizza->province) ?></td>
        </tr>
        <tr>
            <th><?= __('Pizzasize') ?></th>
            <td><?= h($pizza->pizzasize) ?></td>
        </tr>
        <tr>
            <th><?= __('Crusttype') ?></th>
            <td><?= h($pizza->crusttype) ?></td>
        </tr>
        <tr>
            <th><?= __('Toppings') ?></th>
            <td><?= h($pizza->toppings) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery') ?></th>
            <td><?= h($pizza->delivery) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pizza->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pizza->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pizza->modified) ?></tr>
        </tr>
    </table>
</div>
