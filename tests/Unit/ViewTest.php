<?php

namespace Tests\Unit;

use Tests\TestCase;

class ViewTest extends TestCase
{

    public function test_the_application_returns_a_successful_index_response(): void
    {
        $response = $this->get('/index');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_play_view_response(): void
    {
        $response = $this->get('/play/1');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_info_view_response(): void
    {
        $response = $this->get('/info/1');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_create_view_response(): void
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_edit_view_response(): void
    {
        $response = $this->get('/edit/1');

        $response->assertStatus(200);
    }
}
