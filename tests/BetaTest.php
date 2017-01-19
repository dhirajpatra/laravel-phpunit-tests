<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BetaTest extends TestCase
{
    public function testDisplaysBeta()
    {
        $this->visit('/beta')
            ->see('Beta')
            ->dontSee('Alpha page');
    }

    public function testClickNextForAlpha()
    {
        $this->visit('/beta')
            ->click('Previous')
            ->seePageIs('/alpha');
    }
}
