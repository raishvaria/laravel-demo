<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Go to the homepage
                    ->clickLink('Register') // click the Register link
                    ->assertSee('Register') //Make sure the phrase in the argument is on the page
                    // Fill the form with these values
                    ->value('#name', 'JOe')
                    ->value('#email', 'joe@example.com')
                    ->value('#password', '12345678')
                    ->value('#password-confirm', '12345678')
                    ->click('button[type="submit"]') //click the submit button on the page
                    ->assertPathIs('/home') // Make sure you are in the home page
                    // Make sure you see the phrase in the argument
                    ->assertSee("You are logged in!");
        });
    }
}
