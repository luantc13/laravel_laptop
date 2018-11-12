<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

namespace database\seeds;


class TypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id 1
    	DB::table('type_product')->insert([
    		'name' => 'Dell Inspiron',
            'slug' => changeTitle('Dell Inspiron'),
            'id_category' => '1',
    	]);

        // id 2
        DB::table('type_product')->insert([
            'name' => 'Dell Vostro',
            'slug' => changeTitle('Dell Vostro'),
            'id_category' => '1',
        ]);

        // id 3
        DB::table('type_product')->insert([
            'name' => 'Dell Lattitude',
            'slug' => changeTitle('Dell Lattitude'),
            'id_category' => '1',
        ]);

        // id 4
        DB::table('type_product')->insert([
            'name' => 'Dell XPS',
            'slug' => changeTitle('Dell XPS'),
            'id_category' => '1',
        ]);

        // id 5
        DB::table('type_product')->insert([
            'name' => 'Dell Alienware',
            'slug' => changeTitle('Dell Alienware'),
            'id_category' => '1',
        ]);

        // id 6
        DB::table('type_product')->insert([
            'name' => 'Hp Spectre',
            'slug' => changeTitle('Hp Spectre'),
            'id_category' => '2',
        ]);

        // id 7
        DB::table('type_product')->insert([
            'name' => 'Hp Elitebook',
            'slug' => changeTitle('Hp Elitebook'),
            'id_category' => '2',
        ]);

        // id 8
        DB::table('type_product')->insert([
            'name' => 'Hp Envy',
            'slug' => changeTitle('Hp Envy'),
            'id_category' => '2',
        ]);

        // id 9
        DB::table('type_product')->insert([
            'name' => 'Hp Probook',
            'slug' => changeTitle('Hp Probook'),
            'id_category' => '2',
        ]);

        // id 10
        DB::table('type_product')->insert([
            'name' => 'Republic Of Gamers',
            'slug' => changeTitle('Republic Of Gamers'),
            'id_category' => '3',
        ]);

        // id 11
        DB::table('type_product')->insert([
            'name' => 'Asus Zenbook',
            'slug' => changeTitle('Asus Zenbook'),
            'id_category' => '3',
        ]);

        // id 12
        DB::table('type_product')->insert([
            'name' => 'Asus Vivobook',
            'slug' => changeTitle('Asus Vivobook'),
            'id_category' => '3',
        ]);

        // id 13
        DB::table('type_product')->insert([
            'name' => 'GL Gaming',
            'slug' => changeTitle('GL Gaming'),
            'id_category' => '4',
        ]);

        // id 14
        DB::table('type_product')->insert([
            'name' => 'GV Gaming',
            'slug' => changeTitle('GV Gaming'),
            'id_category' => '4',
        ]);

        // id 15
        DB::table('type_product')->insert([
            'name' => 'GP Gaming',
            'slug' => changeTitle('GP Gaming'),
            'id_category' => '4',
        ]);

        // id 16
        DB::table('type_product')->insert([
            'name' => 'GE Gaming',
            'slug' => changeTitle('GE Gaming'),
            'id_category' => '4',
        ]);

        // id 17
        DB::table('type_product')->insert([
            'name' => 'GS Gaming',
            'slug' => changeTitle('GS Gaming'),
            'id_category' => '4',
        ]);

        // id 18
        DB::table('type_product')->insert([
            'name' => 'GT Gaming',
            'slug' => changeTitle('GT Gaming'),
            'id_category' => '4',
        ]);

        // id 19
        DB::table('type_product')->insert([
            'name' => 'Acer Asprie',
            'slug' => changeTitle('Acer Asprie'),
            'id_category' => '5',
        ]);

        // id 20
        DB::table('type_product')->insert([
            'name' => 'Acer Nitro',
            'slug' => changeTitle('Acer Nitro'),
            'id_category' => '5',
        ]);

        // id 21
        DB::table('type_product')->insert([
            'name' => 'Acer Spin',
            'slug' => changeTitle('Acer Spin'),
            'id_category' => '5',
        ]);

        // id 22
        DB::table('type_product')->insert([
            'name' => 'Acer Asprie V Nitro',
            'slug' => changeTitle('Acer Asprie V Nitro'),
            'id_category' => '5',
        ]);

        // id 23
        DB::table('type_product')->insert([
            'name' => 'Lenovo Thinkpad',
            'slug' => changeTitle('Lenovo Thinkpad'),
            'id_category' => '6',
        ]);

        // id 24
        DB::table('type_product')->insert([
            'name' => 'Macbook Pro',
            'slug' => changeTitle('Macbook Pro'),
            'id_category' => '7',
        ]);

        // id 25
        DB::table('type_product')->insert([
            'name' => 'Macbook Air',
            'slug' => changeTitle('Macbook Air'),
            'id_category' => '7',
        ]);
    }
}
