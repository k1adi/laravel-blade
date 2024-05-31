<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view('while', [
            'i' => 0
        ])
        ->assertSeeText('Current value: 0')
        ->assertSeeText('Current value: 1')
        ->assertSeeText('Current value: 2')
        ->assertSeeText('Current value: 3')
        ->assertSeeText('Current value: 4');
    }
}
