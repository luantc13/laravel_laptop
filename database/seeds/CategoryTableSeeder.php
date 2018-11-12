<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

namespace database\seeds;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id 1
    	DB::table('category')->insert([
    		'name' => 'Dell',
            'slug' => changeTitle('Dell'),
            'image' => 'banner10.png',
    	]);

        // id 2
        DB::table('category')->insert([
            'name' => 'Hp',
            'slug' => changeTitle('Hp'),
            'image' => 'banner11.jpg',
        ]);

        // id 3
        DB::table('category')->insert([
            'name' => 'Asus',
            'slug' => changeTitle('Asus'),
            'image' => 'banner12.jpg',
        ]);

        // id 4
        DB::table('category')->insert([
            'name' => 'Msi',
            'slug' => changeTitle('Msi'),
            'image' => 'banner13.jpg',
        ]);

        // id 5
        DB::table('category')->insert([
            'name' => 'Acer',
            'slug' => changeTitle('Acer'),
            'image' => 'banner15.jpg',
        ]);

        // id 6
        DB::table('category')->insert([
            'name' => 'Lenovo',
            'slug' => changeTitle('Lenovo'),
            'image' => 'banner16.jpg',
        ]);

        // id 7
        DB::table('category')->insert([
            'name' => 'Apple Macbook',
            'slug' => changeTitle('Apple Macbook'),
            'image' => 'banner17.jpg',
        ]);
    }
}



