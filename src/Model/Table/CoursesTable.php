<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Courses Model
 *
 * @property \App\Model\Table\CategoryTable&\Cake\ORM\Association\BelongsTo $Category
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 * @property \App\Model\Table\ChaptersTable&\Cake\ORM\Association\HasMany $Chapters
 *
 * @method \App\Model\Entity\Course newEmptyEntity()
 * @method \App\Model\Entity\Course newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Course> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Course get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Course findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Course patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Course> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Course|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Course saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Course>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Course> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Course>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Course> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CoursesTable extends Table
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

        $this->setTable('courses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Category', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Chapters', [
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('level')
            ->allowEmptyString('level');

        $validator
            ->nonNegativeInteger('category_id')
            ->notEmptyString('category_id');

        $validator
            ->nonNegativeInteger('teacher_id')
            ->notEmptyString('teacher_id');

        $validator
            ->scalar('feedback')
            ->allowEmptyString('feedback');

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
        $rules->add($rules->existsIn(['category_id'], 'Category'), ['errorField' => 'category_id']);
        $rules->add($rules->existsIn(['teacher_id'], 'Teachers'), ['errorField' => 'teacher_id']);

        return $rules;
    }
}
