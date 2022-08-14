<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Persons extends AbstractMigration
{
    public function change(): void
    {
        $person = $this->table('person');
        
        $person->addColumn('name', 'string', ['limit' => 20])
               ->addColumn('birth_date', 'string', ['limit' => 40])
               ->addColumn('cpf', 'string', ['limit' => 40])
               ->addColumn('sex', 'string', ['limit' => 10])
               ->addColumn('phone', 'string', ['limit' => 30])
               ->addColumn('email', 'string', ['limit' => 50])
               ->addIndex(['email'], ['unique' => true])
               ->create();
    }
}
