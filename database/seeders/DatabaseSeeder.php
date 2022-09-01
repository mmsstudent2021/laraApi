<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

         \App\Models\User::factory()->create([
             'name' => 'Hein Htet Zan',
             'email' => 'hhz@gmail.com',
             'password' => Hash::make('asdffdsa')
         ]);

         $this->call([
             ProductSeeder::class
         ]);
    }
}
