<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coursecategories Model
 *
 * @method \App\Model\Entity\Coursecategory newEmptyEntity()
 * @method \App\Model\Entity\Coursecategory newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Coursecategory> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coursecategory get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Coursecategory findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Coursecategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Coursecategory> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coursecategory|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Coursecategory saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Coursecategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coursecategory>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coursecategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coursecategory> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coursecategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coursecategory>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coursecategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coursecategory> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CoursecategoriesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('coursecategories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        return $validator;
    }
}
