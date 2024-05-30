<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    public function testUnlessAdmin()
    {
        $this->view('unless', [
            'isAdmin' => false
        ])->assertSeeText('Hello User');
    }

    public function testIsAdmin()
    {
        $this->view('unless', [
            'isAdmin' => true
        ])->assertDontSeeText('Hello User');
    }
}
