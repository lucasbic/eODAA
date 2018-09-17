<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersCourse Entity
 *
 * @property int $id_users
 * @property int $id_courses
 * @property int $rel_type
 */
class UsersCourse extends Entity
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
        'rel_type' => true
    ];
}
