<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Nailton Sousa',
           'email' => 'nailtonsousa@gmail.com',
           'password' => bcrypt('password')
        ]);
    }
}
