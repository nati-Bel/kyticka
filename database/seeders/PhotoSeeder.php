<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photo::create([
            'gallery_id' => '1',
            'url' => 'https://cdn.pixabay.com/photo/2018/01/05/08/19/beautiful-3062365_1280.jpg'
        ]);

        Photo::create([
            'gallery_id' => '1',
            'url' => 'https://cdn.pixabay.com/photo/2020/05/06/13/55/mothers-day-5137688_1280.jpg'
        ]);

        Photo::create([
            'gallery_id' => '1',
            'url' => 'https://cdn.pixabay.com/photo/2016/11/23/00/31/bouquet-1851462_1280.jpg'
        ]);

        Photo::create([
            'gallery_id' => '1',
            'url' => 'https://cdn.pixabay.com/photo/2016/11/23/17/56/wedding-1854074_1280.jpg'
        ]);

        Photo::create([
            'gallery_id' => '2',
            'url' => 'https://cdn.pixabay.com/photo/2016/09/14/23/07/door-wreath-1670745_1280.jpg'
        ]);

        Photo::create([
            'gallery_id' => '2',
            'url' => 'https://cdn.pixabay.com/photo/2016/10/11/09/47/nature-1730981_1280.jpg'
        ]);

        Photo::create([
            'gallery_id' => '2',
            'url' => 'https://cdn.pixabay.com/photo/2019/12/25/11/42/christmas-4718362_1280.jpg'
        ]);

        Photo::create([
            'gallery_id' => '2',
            'url' => 'https://cdn.pixabay.com/photo/2017/04/13/11/34/door-wreath-2227328_1280.jpg'
        ]);
    }
}
