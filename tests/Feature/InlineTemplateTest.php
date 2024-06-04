<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineTemplateTest extends TestCase
{
    public function testInlineBladeTemplate()
    {
        $response = Blade::render('Hello {{$name}}', ['name' => 'Rizki']);
        self::assertEquals('Hello Rizki', $response);
    }
}
