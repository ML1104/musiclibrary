<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HttpTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testHttpConnection()
    {
        $response = $this->get('/library');

        $response->assertSeeText('RandomSong');
    }
}
