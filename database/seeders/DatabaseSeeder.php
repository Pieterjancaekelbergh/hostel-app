<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // seed database
        // Category::factory(10)->create();

        // Seed the posts table
        // Post::factory(30)->create(); // create 30 posts

        // Seed the users table with a single admin user
        User::factory(1)->create([
            'name' => 'Frederick',
            'email' => 'frederick@rogerthat.be',
            'password' => bcrypt('secret'),
            'email_verified_at' => null,
        ]);
        
    }
}
