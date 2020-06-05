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
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'phone' => '+4199999999',
                'email' => 'adminuser@mail.ru',
                'password' => Hash::make('superadmin'), // secret
                'remember_token' => md5(rand()),
                'role' => ConstUserRole::ADMIN,
                'enabled' => ConstBoolean::YES,
            ],
            [
                'first_name' => 'Lawyer',
                'last_name' => 'Lawyer',
                'phone' => '+987789987789',
                'email' => 'lawyer@gmail.com',
                'password' => Hash::make('123qweasdqwe123'), // secret
                'remember_token' => md5(rand()),
                'role' => ConstUserRole::ROLE_LAWYER,
                'enabled' => ConstBoolean::YES,
            ],
            [
                'first_name' => 'Customer',
                'last_name' => 'Lenone',
                'phone' => '+986598787',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('123qweasdqwe123'), // secret
                'remember_token' => md5(rand()),
                'role' => ConstUserRole::ROLE_CLIENT,
                'enabled' => ConstBoolean::YES,
            ],
        ]);
    }
}
