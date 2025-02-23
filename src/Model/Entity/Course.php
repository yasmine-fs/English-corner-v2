<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string|null $category
 * @property string $name
 * @property int $user_id
 * @property int $duration
 * @property string $price
 * @property string|null $state
 * @property string $course_level
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Coursestate[] $coursestates
 * @property \App\Model\Entity\Review[] $reviews
 * @property \App\Model\Entity\Usercourse[] $usercourses
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
        'category' => true,
        'name' => true,
        'user_id' => true,
        'duration' => true,
        'price' => true,
        'state' => true,
        'course_level' => true,
        'user' => true,
        'coursestates' => true,
        'reviews' => true,
        'usercourses' => true,
    ];
}
