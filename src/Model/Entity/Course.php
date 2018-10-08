<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $name
 * @property int $knowledge_area_id
 * @property int $educational_institution_id
 * @property string $description
 *
 * @property \App\Model\Entity\KnowledgeArea $knowledge_area
 * @property \App\Model\Entity\EducationalInstitution $educational_institution
 * @property \App\Model\Entity\Lecture[] $lectures
 * @property \App\Model\Entity\User[] $users
 */
class Course extends Entity
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
        'knowledge_area_id' => true,
        'educational_institution_id' => true,
        'description' => true,
        'knowledge_area' => true,
        'educational_institution' => true,
        'lectures' => true,
        'users' => true
    ];
}
