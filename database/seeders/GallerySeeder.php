<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
   
    public function run(): void
    {
        Gallery::create([
            'title' => 'Svadby',
            'cover_url' => 'https://cdn.pixabay.com/photo/2017/08/01/08/28/bouquet-2563485_1280.jpg'
        ]);

        Gallery::create([
            'title' => 'Vence',
            'cover_url' => 'https://cdn.pixabay.com/photo/2021/12/04/15/06/wreath-6845399_1280.jpg'
        ]);
    }
}
