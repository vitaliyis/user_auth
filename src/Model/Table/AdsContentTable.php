<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdsContent Model
 *
 * @property \App\Model\Table\AdsLinkTable|\Cake\ORM\Association\HasMany $AdsLink
 *
 * @method \App\Model\Entity\AdsContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdsContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdsContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdsContent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdsContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdsContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdsContent findOrCreate($search, callable $callback = null, $options = [])
 */
class AdsContentTable extends Table
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

        $this->setTable('ads_content');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('AdsLink', [
            'foreignKey' => 'ads_content_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
