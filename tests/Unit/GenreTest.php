<?php

namespace Tests\Unit;

use Tests\TestCase;

class GenreTest extends TestCase
{
    public function test_if_genres_table_is_complete(): void
    {
        $this->assertDatabaseHas('genres', [
            'genre' => 'Film przyrodniczy'
        ]);
        $this->assertDatabaseHas('genres', [
            'genre' => 'Program kulinarny'
        ]);
        $this->assertDatabaseHas('genres', [
            'genre' => 'Horror'
        ]);
        $this->assertDatabaseHas('genres', [
            'genre' => 'Podcast'
        ]);
        $this->assertDatabaseHas('genres', [
            'genre' => 'Film akcji'
        ]);
        $this->assertDatabaseHas('genres', [
            'genre' => 'Inny'
        ]);
    }
}
