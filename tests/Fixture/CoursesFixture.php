<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursesFixture
 */
class CoursesFixture extends TestFixture
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
                'id_crs' => 1,
                'category' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'duration' => 1,
                'price' => 1.5,
                'state' => 'Lorem ipsum dolor sit amet',
                'course_level' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
