<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Answers Model
 *
 * @property \App\Model\Table\QuizzesTable&\Cake\ORM\Association\BelongsTo $Quizzes
 *
 * @method \App\Model\Entity\Answer newEmptyEntity()
 * @method \App\Model\Entity\Answer newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Answer> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Answer get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Answer findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Answer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Answer> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Answer|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Answer saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Answer>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Answer> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Answer>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Answer> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AnswersTable extends Table
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

        $this->setTable('answers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Quizzes', [
            'foreignKey' => 'quizz_id',
            'joinType' => 'INNER',
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
            ->nonNegativeInteger('quizz_id')
            ->notEmptyString('quizz_id');

        $validator
            ->scalar('question')
            ->requirePresence('question', 'create')
            ->notEmptyString('question');

        $validator
            ->scalar('student_answer')
            ->allowEmptyString('student_answer');

        $validator
            ->scalar('correct_answer')
            ->requirePresence('correct_answer', 'create')
            ->notEmptyString('correct_answer');

        $validator
            ->boolean('is_correct')
            ->requirePresence('is_correct', 'create')
            ->notEmptyString('is_correct');

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
        $rules->add($rules->existsIn(['quizz_id'], 'Quizzes'), ['errorField' => 'quizz_id']);

        return $rules;
    }
}
