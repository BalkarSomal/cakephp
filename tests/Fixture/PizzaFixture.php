<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PizzaFixture
 *
 */
class PizzaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pizza';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'PizzaSize' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Quantity' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'crustType' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Toppings' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Address' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'City' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'PostalCode' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'PhoneNumber' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Delivery_or_Pickup' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'PizzaSize' => 'Lorem ipsum dolor ',
            'Quantity' => 1,
            'crustType' => 'Lorem ipsum dolor ',
            'Toppings' => 'Lorem ipsum dolor ',
            'Address' => 'Lorem ipsum dolor sit amet',
            'City' => 'Lorem ipsum dolor ',
            'PostalCode' => 'Lorem ipsum d',
            'PhoneNumber' => 'Lorem ipsum do',
            'Delivery_or_Pickup' => 'Lorem ipsum d'
        ],
    ];
}
