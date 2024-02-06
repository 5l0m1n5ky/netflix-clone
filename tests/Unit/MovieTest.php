<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Movie;

class MovieTest extends TestCase
{
    public function test_uniqueness_of_new_title(): void
    {
        $movie_1 = Movie::create([
            'title' => '[TEST] Szlakiem pingwinów 1',
            'description' => 'Sample test description 1',
            'production' => 'Sample production 1',
            'media_path' => 'media/penguin_-_115177 (360p).mp4',
            'cover' => 'media/penguins-2555571_1280.jpg',
        ]);

        $movie_2 = Movie::create([
            'title' => '[TEST] Szlakiem pingwinów 2',
            'description' => 'Sample test description 2',
            'production' => 'Sample test production 2',
            'media_path' => 'media/penguin_-_115177 (360p).mp4',
            'cover' => 'media/penguins-2555571_1280.jpg',
        ]);

        $this->assertTrue($movie_1->title != $movie_2->title);
    }
}
