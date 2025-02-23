<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgressFixture
 */
class ProgressFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'progress';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_progress' => 1,
                'user_id' => 1,
                'quizz_id' => 1,
                'course_id' => 1,
                'completion' => 1.5,
                'last_accessed' => '2025-02-08',
            ],
        ];
        parent::init();
    }
}
