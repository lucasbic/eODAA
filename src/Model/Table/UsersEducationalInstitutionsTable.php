<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersEducationalInstitutions Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EducationalInstitutionsTable|\Cake\ORM\Association\BelongsTo $EducationalInstitutions
 *
 * @method \App\Model\Entity\UsersEducationalInstitution get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersEducationalInstitution newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersEducationalInstitution[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersEducationalInstitution|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersEducationalInstitution|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersEducationalInstitution patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersEducationalInstitution[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersEducationalInstitution findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersEducationalInstitutionsTable extends Table
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

        $this->setTable('users_educational_institutions');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey(['user_id', 'educational_institution_id']);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EducationalInstitutions', [
            'foreignKey' => 'educational_institution_id',
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
        $rules->add($rules->existsIn(['educational_institution_id'], 'EducationalInstitutions'));

        return $rules;
    }
}
