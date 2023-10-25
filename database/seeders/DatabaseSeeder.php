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
        \App\Models\Formulir::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\akun::create(
        //     // [
        //     //     'name' => 'User 1',
        //     //     'email' => 'user1@example.com',
        //     //     'password' => bcrypt('password1'),
        //     // ],
        //     // [
        //     //     'name' => 'User 2',
        //     //     'email' => 'user2@example.com',
        //     //     'password' => bcrypt('password2'),
        //     // ],
        //     [
        //         'name' => 'User 3',
        //         'email' => 'user3@example.com',
        //         'password' => bcrypt('password3'),
        //     ],
        //     [
        //         'name' => 'User 4',
        //         'email' => 'user4@example.com',
        //         'password' => bcrypt('password4'),
        //     ],
        //     [
        //         'name' => 'User 5',
        //         'email' => 'user5@example.com',
        //         'password' => bcrypt('password5'),
        //     ]
        //     );

        // \App\Models\medis::factory(5)->create();
    }
}
