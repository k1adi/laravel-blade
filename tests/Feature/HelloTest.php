<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')->assertSeeText('Rizki Adi');
    }

    public function testWorld()
    {
        // Nested view directory
        $this->get('/world')->assertSeeText('riz.kiadi');
    }

    public function testWithoutRoute()
    {
        // Testing direct to template without routing 
        $this->view('hello', [
            'name' => 'Rizki'
        ])->assertSeeText('Rizki');
    }
}
