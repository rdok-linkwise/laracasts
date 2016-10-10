<?php

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     */
    public function testBasicExample()
    {
        $this->visit('/')
            ->click('Click Me')
            ->see('You\'ve been clicked, punk.')
            ->seePageIs('click-me');
    }
}
