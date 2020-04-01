<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'name' => 'Andrzej Nogala', 
            'email' => 'nogala.andrzej@gmail.com',
            'password' => Hash::make('1111'),
        ]);
    }
}
