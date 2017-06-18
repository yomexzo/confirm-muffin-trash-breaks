<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class ImportedUsersTableTest extends TestCase
{
    public $fixtures = [
        'app.imported_users'
    ];

    public function setUp() {
        parent::setUp();
    }

    public function testFixtureLoadedSuccesfully()
    {
        $this->assertEquals(TableRegistry::get('ImportedUsers')->find()->all()->count(), 2);
    }

    public function tearDown() {
        parent::tearDown();
    }
}
