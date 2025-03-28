<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chapter Entity
 *
 * @property int $id
 * @property string|null $title
 * @property int $course_id
 *
 * @property \App\Model\Entity\Content[] $content
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Quiz[] $quizzes
 */
class Chapter extends Entity
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
        'course_id' => true,
        'content' => true,
        'course' => true,
        'quizzes' => true,
    ];
}
