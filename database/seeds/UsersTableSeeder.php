<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

namespace database\seeds;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
        	DB::table('users')->insert([
        		'name' => 'User'.$i,
        		'email' => 'user'.$i.'@mymail.com',
        		'password' => bcrypt('123456'),
        		'avatar' => $i.'_user.png',
        		'address' => 'KTX Khu B ĐHQG Tp. HCM',
        		'phone' => '0123456789',
        		'level' => 0,
        	]);
        }

        for ($i = 0; $i < 3; $i++) {
            DB::table('users')->insert([
                'name' => 'Admin'.$i,
                'email' => 'admin'.$i.'@mymail.com',
                'password' => bcrypt('123456'),
                'avatar' => $i.'_admin.jpg',
                'address' => 'KTX Khu B ĐHQG Tp. HCM',
                'phone' => '0123456789',
                'level' => 1,
            ]);
        }

         DB::table('users')->insert([
            'name' => 'Admin3',
            'email' => 'admin3@mymail.com',
            'password' => bcrypt('123456'),
            'avatar' => '3_admin.jpg',
            'address' => 'KTX Khu B ĐHQG Tp. HCM',
            'phone' => '0123456789',
            'level' => 2,
        ]);
    }
}
