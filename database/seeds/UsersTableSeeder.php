<?php

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
        \App\User::create([
           'name' => 'Admin',
           'email' => 'miloske1104@gmail.com',
           'password' => bcrypt('admin1234'),

        ]);
    }
}
