<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', ['user' => [
            'premium' => true,
            'admin' => true,
            'name' => 'rizki'
        ]])
        ->assertSee('checked')
        ->assertDontSee('readonly')
        ->assertSee('rizki');
    }
}
