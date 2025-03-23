<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property int $id
 * @property int $quizz_id
 * @property string|null $correct_answer
 * @property bool|null $is_correct
 *
 * @property \App\Model\Entity\Quiz $quiz
 */
class Answer extends Entity
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
        'quizz_id' => true,
        'correct_answer' => true,
        'is_correct' => true,
        'quiz' => true,
    ];
}
