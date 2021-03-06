<?php

namespace Tests\Feature;

use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function an_author_can_be_created()
    {

        $this->withoutExceptionHandling();

        $response = $this->post('/author', [
            'name' => 'Dawlatzai', 
            'dob' => '01/11/1988'
        ]);

        $author = Author::all();

        $this->assertCount(1, $author);

        $this->assertInstanceOf(Carbon::class, $author->first()->dob);

        $this->assertEquals('1988/11/01', $author->first()->dob->format('Y/d/m'));

    }
    
}
