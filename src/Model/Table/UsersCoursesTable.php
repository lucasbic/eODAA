<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersCourses Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CoursesTable|\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\RelTypesTable|\Cake\ORM\Association\BelongsTo $RelTypes
 *
 * @method \App\Model\Entity\UsersCourse get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersCourse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersCourse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersCourse|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersCourse|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersCourse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersCourse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersCourse findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersCoursesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users_courses');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey(['user_id', 'course_id']);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RelTypes', [
            'foreignKey' => 'rel_type_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['course_id'], 'Courses'));
        $rules->add($rules->existsIn(['rel_type_id'], 'RelTypes'));

        return $rules;
    }
}
