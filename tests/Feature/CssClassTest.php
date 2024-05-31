<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CssClassTest extends TestCase
{
    public function testCssClass()
    {
        $this->view('css-class', [ 'skills' => [
            ['name' => 'Coding', 'love' => false],
            ['name' => 'Riding', 'love' => true],
            ['name' => 'Writing', 'love' => false],
            ['name' => 'Hiking', 'love' => true],
        ]])
        ->assertSee('<li class="red"> Coding </li>', false)
        ->assertSee('<li class="red bold"> Riding </li>', false)
        ->assertSee('<li class="red"> Writing </li>', false)
        ->assertSee('<li class="red bold"> Hiking </li>', false);
    }
}
