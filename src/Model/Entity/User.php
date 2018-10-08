<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $cpf
 * @property string $phone_number
 * @property string $scholarity
 * @property int $address_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $access_level_id
 *
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\AccessLevel $access_level
 * @property \App\Model\Entity\Course[] $courses
 * @property \App\Model\Entity\EducationalInstitution[] $educational_institutions
 */
class User extends Entity
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
        'name' => true,
        'email' => true,
        'password' => true,
        'cpf' => true,
        'phone_number' => true,
        'scholarity' => true,
        'address_id' => true,
        'created' => true,
        'modified' => true,
        'access_level_id' => true,
        'address' => true,
        'access_level' => true,
        'courses' => true,
        'educational_institutions' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}
