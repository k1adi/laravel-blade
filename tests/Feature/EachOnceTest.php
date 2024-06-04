<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachOnceTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', ['users' => [
            [
                'name' => 'Rizki',
                'hobbies' => ['Coding', 'Writing']
            ],
            [
                'name' => 'Adi',
                'hobbies' => ['Riding', 'Hiking']
            ],
        ]])
        ->assertSeeInOrder(['.red', 'Rizki', 'Coding', 'Writing', 'Adi', 'Riding', 'Hiking']);
    }
}
