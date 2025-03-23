<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teacher Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $teaching_domain
 * @property string|null $certificate_path
 * @property string|null $certificate_status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Course[] $courses
 */
class Teacher extends Entity
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
        'user_id' => true,
        'teaching_domain' => true,
        'certificate_path' => true,
        'certificate_status' => true,
        'user' => true,
        'courses' => true,
    ];
}
