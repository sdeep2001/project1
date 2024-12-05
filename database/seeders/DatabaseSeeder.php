<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Piotr Jura',
            'email' => 'piotr@jura.com',
        ]);
        User::factory(300)->create();

        $users = User::all()->shuffle();

        
            }
        }
    
