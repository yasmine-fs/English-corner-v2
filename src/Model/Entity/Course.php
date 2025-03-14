<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $category_id
 * @property int $teacher_id
 * @property string|null $feedback
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Review[] $reviews
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
        'category_id' => true,
        'teacher_id' => true,
        'feedback' => true,
        'user' => true,
        'reviews' => true,
    ];
}
