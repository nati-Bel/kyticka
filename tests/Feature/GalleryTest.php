<?php

namespace Tests\Feature;

use Tests\TestCase;


class GalleryTest extends TestCase
{
   
    public function test_get_galleries()
    {
        $response =$this->get("/api/admin/galleries");
        $response -> assertStatus(200);
        $response -> assertJsonStructure(['data' => [
            ['id', 'title', 'cover_url', 'photos']
        ]]);
    }

    public function test_get_gallery_detail(){
        $response = $this-> get('/api/admin/galleries/1');
        $response->assertStatus(200);
        $response->assertJsonStructure(['data' => ["id", "title", "cover_url", "photos"]]);
        $response->assertJsonFragment(["title"=>"Svadby"]);
    }

    public function test_get_non_existing_gallery_detail(){
        $response = $this -> get('/api/admin/galleries/558');
        $response->assertStatus(404);
    }
}
