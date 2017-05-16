<?php

class ExampleTest extends FeatureTestCase
{
    
    function test_basic_example()
    {

        $user = factory(App\User::class)->create([
            'name' => 'Adrian Gomez',
            'email' => 'adr@gmail.com']);


        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Adrian Gomez')
            ->see('adr@gmail.com');
    }

    function tes_one()
    {
        $this->visit('/')
            ->see('Laravel');
    }
}
