<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdsLink Model
 *
 * @property \App\Model\Table\AdsContentTable|\Cake\ORM\Association\BelongsTo $AdsContent
 *
 * @method \App\Model\Entity\AdsLink get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdsLink newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdsLink[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdsLink|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdsLink patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdsLink[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdsLink findOrCreate($search, callable $callback = null, $options = [])
 */
class AdsLinkTable extends Table
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

        $this->setTable('ads_link');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('AdsContent', [
            'foreignKey' => 'ads_content_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('url');

        $validator
            ->dateTime('datetime')
            ->requirePresence('datetime', 'create')
            ->notEmpty('datetime');

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
        $rules->add($rules->existsIn(['ads_content_id'], 'AdsContent'));

        return $rules;
    }
}
