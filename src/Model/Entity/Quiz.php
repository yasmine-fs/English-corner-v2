<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quiz Entity
 *
 * @property int $id_qz
 * @property string|null $state
 * @property string|null $types
 * @property string|null $question
 * @property string|null $description
 * @property string|null $defficulty_level
 * @property int|null $duration
 */
class Quiz extends Entity
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
        'state' => true,
        'types' => true,
        'question' => true,
        'description' => true,
        'defficulty_level' => true,
        'duration' => true,
    ];
}
