<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // here the browser method accepts a callback which
        // is an instance of the Browser class
        $this->browse(function (Browser $browser) {
            // Here you can call different methods and assertion unique to Dusk.

            $browser->visit('/') // This method as its name implies is a test that visits the
                                // URL corresponding to the argument provided.

                    ->assertSee('Laravel'); // This method checks if the text corresponding to
                                // the arguments givent in on the page.
        });
    }
}
