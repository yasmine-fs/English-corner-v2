<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Progress Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 *
 * @method \App\Model\Entity\Progres newEmptyEntity()
 * @method \App\Model\Entity\Progres newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Progres> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Progres get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Progres findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Progres patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Progres> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Progres|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Progres saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Progres>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Progres>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Progres>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Progres> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Progres>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Progres>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Progres>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Progres> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ProgressTable extends Table
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

        $this->setTable('progress');
        $this->setDisplayField('id_progress');
        $this->setPrimaryKey('id_progress');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
        ]);
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
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('quizz_id')
            ->requirePresence('quizz_id', 'create')
            ->notEmptyString('quizz_id');

        $validator
            ->integer('course_id')
            ->allowEmptyString('course_id');

        $validator
            ->decimal('completion')
            ->allowEmptyString('completion');

        $validator
            ->date('last_accessed')
            ->allowEmptyDate('last_accessed');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['course_id'], 'Courses'), ['errorField' => 'course_id']);

        return $rules;
    }
}
