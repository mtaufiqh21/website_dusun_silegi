<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = [
            ['id' => 1, 'title' => 'Test Berita', "slug" => "test-berita", "author" => "author 1", "posting_date" => "2002-11-06", "image" => 'images/noimage.jpg', "short_description" => "Test berita", "long_description" => "Lorem ipsum", "active_status" => 1],
            ['id' => 2, 'title' => 'Test Berita 1', "slug" => "test-berita-1", "author" => "author 2", "posting_date" => "2002-11-07", "image" => 'images/noimage.jpg', "short_description" => "Test berita 1", "long_description" => "Lorem ipsum 1", "active_status" => 1],
            ['id' => 3, 'title' => 'Test Berita 2', "slug" => "test-berita-2", "author" => "author 3", "posting_date" => "2002-11-08", "image" => 'images/noimage.jpg', "short_description" => "Test berita 2", "long_description" => "Lorem ipsum 2", "active_status" => 1],
            ['id' => 4, 'title' => 'Test Berita 3', "slug" => "test-berita-3", "author" => "author 4", "posting_date" => "2002-11-09", "image" => 'images/noimage.jpg', "short_description" => "Test berita 3", "long_description" => "Lorem ipsum 3", "active_status" => 1],
            ['id' => 5, 'title' => 'Test Berita 4', "slug" => "test-berita-4", "author" => "author 5", "posting_date" => "2002-11-10", "image" => 'images/noimage.jpg', "short_description" => "Test berita 4", "long_description" => "Lorem ipsum 4", "active_status" => 1],
            ['id' => 6, 'title' => 'Test Berita 5', "slug" => "test-berita-5", "author" => "author 6", "posting_date" => "2002-11-11", "image" => 'images/noimage.jpg', "short_description" => "Test berita 5", "long_description" => "Lorem ipsum 5", "active_status" => 1],
        ];

        News::insert($news);
    }

}
