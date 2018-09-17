<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersCourses Model
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
        $this->setDisplayField('id_users');
        $this->setPrimaryKey(['id_users', 'id_courses']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_users')
            ->allowEmpty('id_users', 'create');

        $validator
            ->integer('id_courses')
            ->allowEmpty('id_courses', 'create');

        $validator
            ->integer('rel_type')
            ->requirePresence('rel_type', 'create')
            ->notEmpty('rel_type');

        return $validator;
    }
}
