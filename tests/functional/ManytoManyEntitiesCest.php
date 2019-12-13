<?php namespace App\Tests;

use App\Entity\EntityA;
use App\Entity\EntityB;
use App\Tests\FunctionalTester;

class ManytoManyEntitiesCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->haveInRepository(
            EntityA::class,
            [
                'name' => 'Name A',
                'entityB' =>[[ 'name' => 'Name B' ]],
            ]);
        $I->seeInRepository(EntityB::class, ['name' => 'Name B']);
        $I->seeInRepository(EntityA::class, ['name' => 'Name A']);
        $I->seeInRepository(EntityA::class, ['entityB' => ['name' => 'Name B']]);
    }
}
