<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddCertificateToTeachers extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('teachers');
        $table->addColumn('certificate_path', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);
        $table->addColumn('certificate_status', 'enum', [
            'values' => ['pending', 'approved', 'rejected'],
            'default' => 'pending',
            'null' => false,
        ]);
        $table->update();
    }
}