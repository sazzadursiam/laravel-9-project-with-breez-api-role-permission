<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'sazzadur.swe@gmail.com')->first();

        if (is_null($user)) {
            //admin user create
            User::create([
                'name' => 'Md. Sazzadur Rahman',
                'email' => 'sazzadur.swe@gmail.com',
                'user_type' => '1',
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}