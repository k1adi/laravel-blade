<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testExcellent()
    {
        $this->view('switch', [
            'score' => 90
        ])->assertSeeText('Excellent');
    }

    
    public function testNice()
    {
        $this->view('switch', [
            'score' => 80
        ])->assertSeeText('Nice');
    }

    
    public function testGood()
    {
        $this->view('switch', [
            'score' => 70
        ])->assertSeeText('Good');
    }
}
