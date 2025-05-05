<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $gevan = User::create([
        //     'name' => 'gevan lolyvich',
        //     'username' => 'gevanlolyvich',
        //     'email' => 'gevanlolyvich@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'web design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'judul artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'penanaman bibit'
        // ]);

        // Post::factory(20)->recycle([
        //     Category::factory(3)->create(),
        //     $gevan,
        //     User::factory(2)->create()
        // ])->create();

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(20)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
