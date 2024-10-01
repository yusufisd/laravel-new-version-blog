<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::create([
            "title" => "SAĞLIK",
            "author_id" => 1
        ]);

        BlogCategory::create([
            "title" => "YAŞAM",
            "author_id" => 2
        ]);

        BlogCategory::create([
            "title" => "TEKNOLOJİ",
            "author_id" => 1
        ]);

        BlogCategory::create([
            "title" => "SPOR",
            "author_id" => 2
        ]);

        BlogCategory::create([
            "title" => "GÖKYÜZÜ",
            "author_id" => 1
        ]);

        BlogCategory::create([
            "title" => "SOSYOLOJİ",
            "author_id" => 2
        ]);

        BlogCategory::create([
            "title" => "YAZILIM",
            "author_id" => 1
        ]);
    }
}
