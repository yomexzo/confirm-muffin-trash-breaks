<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    public function change()
    {
        $this->table('imported_users')
            ->addColumn('username', 'string', ['null' => false])
            ->addColumn('password', 'string', ['null' => false])
            ->addColumn('created', 'datetime', ['null' => true])
            ->create();
    }
}
