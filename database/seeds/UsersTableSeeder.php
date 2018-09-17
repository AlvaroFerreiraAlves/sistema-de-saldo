<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name'      => 'Josefina Ferreira',
            'email'     => 'josefina@empresa.com.br',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Outro Usuário',
            'email'     => 'contato@empresa.com.br',
            'password'  => bcrypt('123456'),
        ]);
    }
}
