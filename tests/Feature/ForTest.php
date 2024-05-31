<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForTest extends TestCase
{
    public function testForLooping()
    {
        $this->view('for', [
            'limit' => 5
        ])
        ->assertSeeText('0')
        ->assertSeeText('1')
        ->assertSeeText('2')
        ->assertSeeText('3')
        ->assertSeeText('4');
    }

    public function testForEachLooping()
    {
        $this->view('foreach', [
            'skills' => ['Coding', 'Riding', 'Writing']
        ])
        ->assertSeeText('Coding')
        ->assertSeeText('Riding')
        ->assertSeeText('Writing');
    }

    public function testEmptyForElse()
    {
        $this->view('forelse', [
            'skills' => []
        ])->assertSeeText('Doesn\'t have skills!', false);
    }

    public function testForElse()
    {
        $this->view('forelse', [
            'skills' => ['Coding', 'Riding']
        ])
        ->assertSeeText('Coding')
        ->assertSeeText('Riding');        
    }
}
