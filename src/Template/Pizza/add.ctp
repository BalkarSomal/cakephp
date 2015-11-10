<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pizza form large-9 medium-8 columns content">
    <?= $this->Form->create($pizza) ?>
    <fieldset>
        <legend><?= __('Add Pizza') ?></legend>
        <?php
            echo $this->Form->input('PizzaSize',array(
                                   'options' => array('Small','Medium','Large','X-Large'),
                                   'empty' => 'Select Size'));
            echo $this->Form->input('Quantity');
            echo $this->Form->input('crustType',array(
                                    'options' => array('Thin Crust','Hand Tossed','Cheesy                                           Crust','Gluten Free'),
                                    'empty' => 'Select Crust'));
            echo $this->Form->input('Toppings', array(
                                    'label' =>'Toppings',
                                    'type' => 'select',
                                    'multiple'=>'checkbox',
                                    'options'=> array( 'ham'=>'Ham', 'tomato'=>'Tomatoes',                                           'onion'=>'Red Onions', 'pepper'=>'Green                                                         Peppers','mushroom'=>'Fresh Mushrooms','meat'=>'pepperoni')));
            echo $this->Form->input('Address');
            echo $this->Form->input('City');
            echo $this->Form->input('PostalCode');
            echo $this->Form->input('PhoneNumber');
            echo $this->Form->input('Delivery_or_Pickup',array(
                                    'options' => array('Delivery','Pick-Up'),
                                    'empty' => 'Select Type of Order'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->button(__('Reset')) ?>
    <?= $this->Form->end() ?>
</div>
