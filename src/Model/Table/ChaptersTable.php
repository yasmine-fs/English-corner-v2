<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chapters Model
 *
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\ContentTable&\Cake\ORM\Association\HasMany $Content
 * @property \App\Model\Table\QuizzesTable&\Cake\ORM\Association\HasMany $Quizzes
 *
 * @method \App\Model\Entity\Chapter newEmptyEntity()
 * @method \App\Model\Entity\Chapter newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Chapter> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chapter get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Chapter findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Chapter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Chapter> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chapter|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Chapter saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Chapter>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chapter>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chapter>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chapter> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chapter>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chapter>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chapter>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chapter> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ChaptersTable extends Table
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

        $this->setTable('chapters');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Content', [
            'foreignKey' => 'chapter_id',
        ]);
        $this->hasMany('Quizzes', [
            'foreignKey' => 'chapter_id',
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->nonNegativeInteger('course_id')
            ->notEmptyString('course_id');

        $validator
            ->scalar('content')
            ->maxLength('content', 4294967295)
            ->allowEmptyString('content');

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
        $rules->add($rules->existsIn(['course_id'], 'Courses'), ['errorField' => 'course_id']);

        return $rules;
    }
}
