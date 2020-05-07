<?php

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
        ]);
    }
}
