<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RelTypes Model
 *
 * @property \App\Model\Table\UsersCoursesTable|\Cake\ORM\Association\HasMany $UsersCourses
 *
 * @method \App\Model\Entity\RelType get($primaryKey, $options = [])
 * @method \App\Model\Entity\RelType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RelType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RelType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RelType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RelType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RelType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RelType findOrCreate($search, callable $callback = null, $options = [])
 */
class RelTypesTable extends Table
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

        $this->setTable('rel_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('UsersCourses', [
            'foreignKey' => 'rel_type_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 1024)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
