<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 3,
                'name' => 'Felix Barros',
                'email' => 'administrador@gmail.com',
                'password' => bcrypt('administrador'),
            ],
        ]);
    }
}
