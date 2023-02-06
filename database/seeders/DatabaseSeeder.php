<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\Rolseeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);




        $this->call(Rolseeder::class);
        User::create([
            'name' => 'Jose Rivas Berrio',
            'email' => 'berrio320683@gmail.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Admin');

        User::create([
            'name' => 'Henner Rivas Berrio',
            'email' => 'alvah35@example.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Blogger');
    }
}
