<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutoTestingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_show_message_returns_correct_message(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Welcome to the AutoTesting application!');
    }


    public function test_sum_returns_correct_answer(){
        $response = $this->get('/sum?num1=5&num2=7');
        $response->assertStatus(200);
        $response->assertSeeText('12');   
    }

    public function test_sum_returns_incorrect_answer(){
        $response = $this->get('/sum?num1=5&num2=8');
        $response->assertStatus(200);
        $response->assertSeeText('15');
    }
}
