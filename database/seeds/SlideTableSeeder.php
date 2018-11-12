<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

namespace database\seeds;


class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('slide')->insert([
    		'link' => 'msi',
            'image' => 'banner00.jpg',
    	]);

        DB::table('slide')->insert([
            'link' => 'asus/republic-of-gamers',
            'image' => 'banner01.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'hp//hp-spectre',
            'image' => 'banner02.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'dell/dell-xps',
            'image' => 'banner03.jpg',
        ]);
    }
}
