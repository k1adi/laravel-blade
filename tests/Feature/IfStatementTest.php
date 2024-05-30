<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{
    // public function testIfStatement()
    // {
    //     $this->view('if-statement', ['skills' => ['asd','asd','asd']])
    //         ->assertSeeText("I don't have any skills!");
    // }
    public function testOneSkill()
    {
        $this->view('if-statement', [
            'skills' => ['Coding']
        ])
        ->assertSeeText('I have one skill');
    }

    public function testMultiSkill()
    {
        
        $this->view('if-statement', [
            'skills' => ['Coding', 'Riding']
        ])
        ->assertSeeText('I have multiple skills');
    }
    
    public function testNoSkill()
    {
        $this->view('if-statement', [
            'skills' => []
        ])
        ->assertSeeText("I don't have any skills!", false);        
    }
}
