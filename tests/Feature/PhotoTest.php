<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PhotoTest extends TestCase
{
    
    public function test_get_photos()
    {
        $response =$this->get('/api/admin/photos');
        $response -> assertStatus(200);
        $response -> assertJsonStructure(['data' => [
            ['id', 'url', 'description', 'gallery']
        ]]);
    }

}
