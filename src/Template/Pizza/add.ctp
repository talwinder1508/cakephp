
<div class="pizza form large-9 medium-8 columns content">
    <?= $this->Form->create($pizza) ?>
    <fieldset>
        <legend><?= __('Order Pizza') ?></legend>
        <?php
            echo $this->Form->input('cust_name');
            echo $this->Form->input('email');
            echo $this->Form->input('telephone');
            echo $this->Form->input('address');
            echo $this->Form->input('city');
            echo $this->Form->input('province', 
                ['options' => [	 'Ontario' => 'Ontario', 
							     'Quebec' => 'Quebec',
                                'Manitoba' => 'Manitoba',
                                'British-Columbia' => "British Columbia"]
                ]);
            echo $this->Form->input('pizzasize', 
                ['options' => [	 'Small' => 'Small', 
							     'Medium' => 'Medium',
                                'Large' => 'Large',
                                'X-Large' => "X-Large"]
                ]);
            echo $this->Form->input('crusttype', 
                ['options' => [	 'Pan' => 'Pan', 
							     'Thin' => 'Thin',
                                'Hand-Toasted' => 'Hand Toasted',
                                'Stuffed' => "Stuffed"]
                ]);

            
            
            echo $this->Form->input('toppings', array(
                                    'type' => 'select',
                                    'multiple' => 'checkbox',
                                    'options' => array(
                                                        'Ham' =>'Ham' ,
                                                        'Pepronni' => 'Pepronni' ,
                                                        'Bacon' => 'Bacon',
                                                        'Onion' => 'Onion' ,
                                                        'Green Pepper' => 'Green Pepper',
                                                        'Mushroom' => 'Mushroom' ,
                                                        'Chicken' => 'Chicken' ,
                                                        'Cilantro' => 'Cilantro',
                                                        'Olives' => 'Olives',
                                                        'Black Olives' => 'Black Olives',
                                                        'Red Pepper' => 'Red Pepper',
                                                        'Sausage' => 'Sausage',
                                                        'PineApple' => 'PineApple',
                                                        'Bacon Strips' => 'Bacon Strips',
                                                        'Garlic' => 'Garlic')));        
    
            echo $this->Form->input('delivery', 
                ['options' => [	'Delivery' => 'Delivery', 
							'Pickup' => 'Pickup']
                ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>