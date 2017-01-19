<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlphaTest extends TestCase
{
    /**
     * this will test alpha page
     */
    public function testDisplaysAlpha()
    {
        $this->visit('/alpha')
            ->see('Alpha')
            ->dontSee('Beta page');
    }

    /**
     * this will test alpha page for next click
     */
    public function testClickNextForBeta()
    {
        $this->visit('/alpha')
            ->click('Next')
            ->seePageIs('/beta');
    }

}
