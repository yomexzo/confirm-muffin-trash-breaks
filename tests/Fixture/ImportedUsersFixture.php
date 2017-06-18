<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class ImportedUsersFixture extends TestFixture
{
    public $import = ['model' => 'ImportedUsers'];

    public $records = [
        ['username' => 'Name 1', 'password' => 'password1'],
        ['username' => 'Name 2', 'password' => 'password2'],
    ];
}
