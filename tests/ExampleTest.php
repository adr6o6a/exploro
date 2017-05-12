<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    
    // use DatabaseMigrations;
    use DatabaseTransactions;
    
    public function testBasicExample()
    {

        $user = factory(App\User::class)->create([
            'name' => 'Adrian Gomez',
            'email' => 'adr@gmail.com']);


        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Adrian Gomez')
            ->see('adr@gmail.com');
    }

    public function tesOne()
    {
        $this->visit('/')
            ->see('Laravel');
    }
}
