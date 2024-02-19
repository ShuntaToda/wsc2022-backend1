<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\Game::create([
        //     'title' => 'DemoGame 1',
        //     'slug' => 'demo-game-1',
        //     'description' => 'This is demogame 1',
        //     "user_id" => '2',
        //     "thumbnail" => ""
        // ]);
        // \App\Models\Game::create([
        //     'title' => 'DemoGame 2',
        //     'slug' => 'demo-game-2',
        //     'description' => 'This is demogame 2',
        //     "user_id" => '2',
        //     "thumbnail" => ""
        // ]);
        
        \App\Models\Version::create([
            'path' => 'DemoGame 1',
            'version' => '1.1.1',
            'game_id' => '1',
        ]);
        \App\Models\Version::create([
            'path' => 'DemoGame 1',
            'version' => '1.2',
            'game_id' => '1',
        ]);
        \App\Models\Version::create([
            'path' => 'DemoGame 1',
            'version' => '1.3',
            'game_id' => '1',
        ]);
        \App\Models\Version::create([
            'path' => 'DemoGame 1',
            'version' => '1.2',
            'game_id' => '2',
        ]);
        \App\Models\Version::create([
            'path' => 'DemoGame 1',
            'version' => '1.3',
            'game_id' => '2',
        ]);
    }
}
