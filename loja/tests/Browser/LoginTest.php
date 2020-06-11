<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
  public function testHome(){
      $this->browse(function(Browser $browser){
          $browser->visit('/')->assertSee('Laravel');
      });

      $this->browse(function(Browser $browser){
        $browser->visit('/')->assertSee('LOGIN');
    });

    $this->browse(function(Browser $browser){
        $browser->visit('/')->assertSee('REGISTER');
    });
  }
}
