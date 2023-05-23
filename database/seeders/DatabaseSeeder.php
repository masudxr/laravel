<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Masud Rana',
            'username' => 'Duronto'
        ]);
        Post::factory(5)->create([
            'user_id' =>$user->id
        ]);
    }
}
