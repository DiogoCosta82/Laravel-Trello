<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'test_trello',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$EAFLTu.j8Eh7xmRu4pgbh.I4U/8s/gfe2c5ItTCphkqj3ZtW5NrSu', // password test2023
        ]);

        User::factory(6)->create();
        $categories = Category::factory(8)->hasTask(6)->create();

        // Attach Users and Categories together
        User::All()->each(function ($user) use ($categories) {
            $user->categories()->saveMany($categories);
        });
    }
}
