<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //Thropugh Seeder
        $this->call([
            UserTableSeeder::class,
        ]);

        //trough factory
        // \App\Models\User::factory(10)->create();
    }
}