<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testEmptyName()
    {
        $this->view('isset-empty', [])
        ->assertDontSeeText('Hello my name is, ');
    }
    
    public function testIssetName()
    {
        $this->view('isset-empty', [
            'name' => 'Rizki',
        ])
        ->assertSeeText('Hello my name is, Rizki');
    }

    public function testEmptySkills()
    {
        $this->view('isset-empty', [
            'skills' => []
        ])
        ->assertSeeText('I have no skills!');
    }

    public function testIssetSkills()
    {
        $this->view('isset-empty', [
            'skills' => ['Coding']
        ])
        ->assertDontSeeText('I have no skills!');
    }
}
