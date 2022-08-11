<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Persons extends AbstractMigration
{
    public function change(): void
    {
        $users = $this->table('person');
        $users->addColumn('name', 'string', ['limit' => 20])
              ->addColumn('birth_date', 'string', ['limit' => 40])
              ->addColumn('cpf', 'string', ['limit' => 40])
              ->addColumn('sex', 'string', ['limit' => 10])
              ->addColumn('phone', 'string', ['limit' => 30])
              ->addColumn('email', 'string', ['limit' => 50])
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime', ['null' => true])
              ->addIndex(['email'], ['unique' => true])
              ->create();
    }
}
