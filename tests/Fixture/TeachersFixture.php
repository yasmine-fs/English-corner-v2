<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TeachersFixture
 */
class TeachersFixture extends TestFixture
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
                'teaching_domain' => 'Lorem ipsum dolor sit amet',
                'certificate_path' => 'Lorem ipsum dolor sit amet',
                'certificate_status' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
