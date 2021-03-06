<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Users;
use App\Models\NewsType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([CategoryTableSeeder::class,NewsTypeTableSeeder::class,UserTableSeeder::class,NewsTableSeeder::class,CommentTableSeeder::class]);
    }
}
