<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Andi Mujur',
            'username' => 'andung',
            'password' => \Hash::make('andung'),
            'roles' => 'admin'
        ]);
    }
}
