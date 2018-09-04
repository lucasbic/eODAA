<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Courses Model
 *
 * @property \App\Model\Table\KnowledgeAreasTable|\Cake\ORM\Association\BelongsTo $KnowledgeAreas
 * @property \App\Model\Table\EducationalInstitutionsTable|\Cake\ORM\Association\BelongsTo $EducationalInstitutions
 * @property \App\Model\Table\LecturesTable|\Cake\ORM\Association\HasMany $Lectures
 *
 * @method \App\Model\Entity\Course get($primaryKey, $options = [])
 * @method \App\Model\Entity\Course newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Course[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Course|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Course|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Course patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Course[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Course findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursesTable extends Table
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

        $this->setTable('courses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('KnowledgeAreas', [
            'foreignKey' => 'knowledge_area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EducationalInstitutions', [
            'foreignKey' => 'educational_institution_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Lectures', [
            'foreignKey' => 'course_id'
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
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
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
        $rules->add($rules->existsIn(['knowledge_area_id'], 'KnowledgeAreas'));
        $rules->add($rules->existsIn(['educational_institution_id'], 'EducationalInstitutions'));

        return $rules;
    }

    public function findInstitution(Query $query, array $options) {
        return $this->find()
            ->distinct(['Courses.id'])
            ->matching('EducationalInstitutions', function($q) use ($options) {
            return $q->where(['EducationalInstitutions.name IN' => $options['educationalinstitutions']]);
        });
    }
}
