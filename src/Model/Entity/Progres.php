<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Progres Entity
 *
 * @property int $student_id
 * @property int $course_id
 * @property string|null $completed_chapters
 * @property string|null $student_answers
 * @property string $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Course $course
 */
class Progres extends Entity
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
        'completed_chapters' => true,
        'student_answers' => true,
        'status' => true,
        'user' => true,
        'course' => true,
    ];
}
