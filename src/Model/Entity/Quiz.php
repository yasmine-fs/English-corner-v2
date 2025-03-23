<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quiz Entity
 *
 * @property int $id
 * @property string $title
 * @property int $chapter_id
 * @property string|null $questions
 * @property string|null $attempts
 * @property string|null $quizz_type
 *
 * @property \App\Model\Entity\Chapter $chapter
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
        'title' => true,
        'chapter_id' => true,
        'questions' => true,
        'attempts' => true,
        'quizz_type' => true,
        'chapter' => true,
    ];
}
