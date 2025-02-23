<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsercoursesFixture
 */
class UsercoursesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'course_id' => 1,
                'last_login' => '2024-12-16',
                'advance' => 1,
                'situation' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
