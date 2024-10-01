<?php

namespace Database\Seeders;

use App\Models\Authors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Authors::create([
            "name" => "Kerem",
            "surname" => "Dönmez",
            "email" => "kerem@gmail.com",
            "password" => Hash::make('123123'),
            "phone" => 5550005555
        ]);

        Authors::create([
            "name" => "Mustafa",
            "surname" => "Cengiz",
            "email" => "mustafa@gmail.com",
            "password" => Hash::make('123123'),
            "phone" => 5550005554
        ]);
    }
}
