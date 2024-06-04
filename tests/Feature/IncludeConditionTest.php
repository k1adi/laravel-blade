<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeWhen()
    {
        $this->view('include-condition', [
            'user' => ['admin' => true, 'name' => 'Rizki']
        ])
        ->assertSeeText('Halo, Rizki!')
        ->assertSeeText('Selamat datang, Admin!')
        ->assertDontSeeText('Selamat datang, User!');
    }

    public function testIncludeUnless()
    {
        $this->view('include-condition', [
            'user' => ['admin' => false, 'name' => 'Kiadi']
        ])
        ->assertSeeText('Halo, Kiadi!')
        ->assertSeeText('Selamat datang, User!')
        ->assertDontSeeText('Selamat datang, Admin!');
    }
}
