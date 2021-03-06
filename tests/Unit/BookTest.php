<?php

namespace Tests\Unit;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function an_author_id_is_recorded()
    {
        Book::create([
            'title' => 'Some Cool Title',
            'author_id' => 1, 
        ]);

        $this->assertCount(1, Book::all());
    }
}
