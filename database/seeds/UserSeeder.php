<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'Adminyan',
                'phone' => '99999999',
                'email' => 'adminadmin@mail.ru',
                'password' => Hash::make('adminadmin11'), // secret
                'remember_token' => md5(rand()),
                'role' => ConstUserRole::ADMIN,
                'enabled' => ConstBoolean::YES,
            ],
            [
                'first_name' => 'Translator',
                'last_name' => 'Translator',
                'phone' => '+987789987789',
                'email' => 'translator@gmail.com',
                'password' => Hash::make('123qweasdqwe123t'), // secret
                'remember_token' => md5(rand()),
                'role' => ConstUserRole::TRANSLATOR,
                'enabled' => ConstBoolean::YES,
            ],
        ]);
    }
}
