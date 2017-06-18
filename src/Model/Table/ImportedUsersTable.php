<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ImportedUsersTable extends Table
{

    public function initialize(array $config) {
        parent::initialize($config);
        
        $this->addBehavior('Muffin/Trash.Trash');
    }
}
