<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pizza Entity.
 *
 * @property int $id
 * @property string $cust_name
 * @property string $email
 * @property string $telephone
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $pizzasize
 * @property string $crusttype
 * @property string $toppings
 * @property string $delivery
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
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
