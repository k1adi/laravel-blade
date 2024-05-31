<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testHeaderWithoutTitle()
    {
        $this->view('include')
        ->assertSeeText('Default Title')
        ->assertSeeText('Selamat Datang!')
        ->assertSeeText('Lorem ipsum dolor sit amet');
    }

    public function testHeaderWithTitle()
    {
        $this->view('include', [
            'title' => 'Hello include'
        ])
        ->assertSeeText('Hello include')
        ->assertSeeText('Selamat Datang!')
        ->assertSeeText('Lorem ipsum dolor sit amet');
    }
}
