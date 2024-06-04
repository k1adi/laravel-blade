<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplateTest extends TestCase
{
    public function testTemplate()
    {
        $this->view('child')
        ->assertSeeText('Aplikasi - Child Title')
        ->assertDontSeeText('Default Header')
        ->assertSeeText('Child Header')
        ->assertSeeText('Default Content')
        ->assertSeeText('Child Content')
        ->assertSeeText('Info from child');
    }
}
