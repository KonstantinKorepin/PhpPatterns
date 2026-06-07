<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\PropertyContainer\MovieImplementation;
use Tests\TestCase;

class PropertyContainerTest extends TestCase
{
    const MOVIE_NAME = 'New film';
    const MOVIE_DESCRIPTION = 'New film description';
    const MOVIE_ACTORS = 'Brad Pitt';

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $movie = new MovieImplementation();
        $movie->setTitle(self::MOVIE_NAME);

        $this->assertTrue($movie->getTitle() === self::MOVIE_NAME);

        $movie->setProperty('description', self::MOVIE_DESCRIPTION);
        $movie->setProperty('actors', self::MOVIE_ACTORS);

        $this->assertTrue($movie->getProperty('description') === self::MOVIE_DESCRIPTION);
        $this->assertTrue($movie->getProperty('actors') === self::MOVIE_ACTORS);

        $movie->removeProperty('actors');
        $actors = $movie->getProperty('actors');
        $this->assertTrue(!isset($actors));
    }
}
