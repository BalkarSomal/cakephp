<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pizza Entity.
 *
 * @property int $id
 * @property string $PizzaSize
 * @property int $Quantity
 * @property string $crustType
 * @property string $Toppings
 * @property string $Address
 * @property string $City
 * @property string $PostalCode
 * @property string $PhoneNumber
 * @property string $Delivery_or_Pickup
 */
class Pizza extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
