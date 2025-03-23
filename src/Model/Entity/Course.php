<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $level
 * @property int $category_id
 * @property int $teacher_id
 * @property string|null $feedback
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\Chapter[] $chapters
 */
class Course extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'title' => true,
        'description' => true,
        'level' => true,
        'category_id' => true,
        'teacher_id' => true,
        'feedback' => true,
        'category' => true,
        'teacher' => true,
        'chapters' => true,
    ];
}
