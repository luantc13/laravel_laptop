<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

namespace database\seeds;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dell Inspiron
        // id 1
    	DB::table('product')->insert([
    		'name' => 'Dell Inspiron 7567',
            'slug' => changeTitle('Dell Inspiron 7567'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>Ổ cứng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>Màn hình:</b> 15.6 inch FHD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>Tích hợp:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Trọng lượng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 26690000,
            'promotion_price' => 25500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
    	]);

        // id 2
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5567',
            'slug' => changeTitle('Dell Inspiron 5567'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7500U, RAM 8GB DDR4, 1TB HDD, AMD Radeon R7 M445 4G GDDR5, 15.6 inch HD (1366x768), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7500U (2.7GHz upto 3.5GHz, 2Cores, 4Threads, 4MB cache, FSB 4GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2133Mhz (2 slot)</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b> AMD Radeon R7 M445 4G GDDR5 + Intel HD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 1000Mbps / WLan 802.11b,g,n / Bluetooth 4.0</p><p><b>Tích hợp:</b> Reader SD | Camera HD | DVI | USB 3.0 | Backlit</p><p><b>Trọng lượng:</b> 2.3 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 19190000,
            'promotion_price' => 17400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 3
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5570',
            'slug' => changeTitle('Dell Inspiron 5570'),
            'id_type' => '1',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 16400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 4
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7373',
            'slug' => changeTitle('Dell Inspiron 7373'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>Ổ cứng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>Màn hình:</b> 15.6 inch FHD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>Tích hợp:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Trọng lượng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 28500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 5
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7577',
            'slug' => changeTitle('Dell Inspiron 7577'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>Ổ cứng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>Màn hình:</b> 15.6 inch FHD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>Tích hợp:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Trọng lượng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 29990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 6
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5468',
            'slug' => changeTitle('Dell Inspiron 5468'),
            'id_type' => '1',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 14700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Vostro
        // id 7
        DB::table('product')->insert([
            'name' => 'Dell Vostro 7570',
            'slug' => changeTitle('Dell Vostro 7570'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 30190000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 8
        DB::table('product')->insert([
            'name' => 'Dell Vostro 3568',
            'slug' => changeTitle('Dell Vostro 3568'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 16300000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 9
        DB::table('product')->insert([
            'name' => 'Dell Vostro 5468',
            'slug' => changeTitle('Dell Vostro 5468'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21000000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 10
        DB::table('product')->insert([
            'name' => 'Dell Vostro 5471',
            'slug' => changeTitle('Dell Vostro 5471'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 24700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 11
        DB::table('product')->insert([
            'name' => 'Dell Vostro 3468',
            'slug' => changeTitle('Dell Vostro 3468'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 10800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Lattitude
        // id 12
        DB::table('product')->insert([
            'name' => 'Dell Lattitude 7280',
            'slug' => changeTitle('Dell Lattitude 7280'),
            'id_type' => '3',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 32900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 13
        DB::table('product')->insert([
            'name' => 'Dell Lattitude E5470',
            'slug' => changeTitle('Dell Lattitude E5470'),
            'id_type' => '3',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 20600000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell XPS
        // id 14
        DB::table('product')->insert([
            'name' => 'Dell XPS 13 9360',
            'slug' => changeTitle('Dell XPS 13 9360'),
            'id_type' => '4',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 46350000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 15
        DB::table('product')->insert([
            'name' => 'Dell XPS 15 9560',
            'slug' => changeTitle('Dell XPS 15 9560'),
            'id_type' => '4',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 48200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Alienware
        // id 16
        DB::table('product')->insert([
            'name' => 'Dell Alienware 17 R4',
            'slug' => changeTitle('Dell Alienware 17 R4'),
            'id_type' => '5',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 40500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Spectre
        // id 17
        DB::table('product')->insert([
            'name' => 'Hp Spectre 13',
            'slug' => changeTitle('Hp Spectre 13'),
            'id_type' => '6',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 41400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Elitebook
        // id 18
        DB::table('product')->insert([
            'name' => 'Hp Elitebook x360 G2',
            'slug' => changeTitle('Hp Elitebook x360 G2'),
            'id_type' => '7',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 40200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 19
        DB::table('product')->insert([
            'name' => 'Hp Elitebook 1040 G3',
            'slug' => changeTitle('Hp Elitebook 1040 G3'),
            'id_type' => '7',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27390000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Envy
        // id 20
        DB::table('product')->insert([
            'name' => 'Hp Envy 13',
            'slug' => changeTitle('Hp Envy 13'),
            'id_type' => '8',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21350000,
            'promotion_price' => 20500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 21
        DB::table('product')->insert([
            'name' => 'Hp Envy 15',
            'slug' => changeTitle('Hp Envy 15'),
            'id_type' => '8',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 23200000,
            'promotion_price' => 21200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Probook
        // id 22
        DB::table('product')->insert([
            'name' => 'Hp Probook 450 G4',
            'slug' => changeTitle('Hp Probook 450 G4'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 15500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 23
        DB::table('product')->insert([
            'name' => 'Hp Probook 450 G3',
            'slug' => changeTitle('Hp Probook 450 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 11700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 24
        DB::table('product')->insert([
            'name' => 'Hp Probook 440 G3',
            'slug' => changeTitle('Hp Probook 440 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 14950000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 25
        DB::table('product')->insert([
            'name' => 'Hp Probook 440 G4',
            'slug' => changeTitle('Hp Probook 440 G4'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 12100000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 26
        DB::table('product')->insert([
            'name' => 'Hp Probook 430 G3',
            'slug' => changeTitle('Hp Probook 430 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 11700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Republic Of Gamers
        // id 27
        DB::table('product')->insert([
            'name' => 'Asus FX503VD',
            'slug' => changeTitle('Asus FX503VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 28
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL503VD',
            'slug' => changeTitle('Asus ROG Strix Hero GL503VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27490000,
            'promotion_price' => 26490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 29
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Scar GL703VD',
            'slug' => changeTitle('Asus ROG Strix Scar GL703VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27990000,
            'promotion_price' => 26990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 30
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL503VM',
            'slug' => changeTitle('Asus ROG Strix Hero GL503VM'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 32490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 31
        DB::table('product')->insert([
            'name' => 'Asus ROG GL553VD',
            'slug' => changeTitle('Asus ROG GL553VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 24490000,
            'promotion_price' => 22790000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 32
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL703VM',
            'slug' => changeTitle('Asus ROG Strix Hero GL703VM'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 39990000,
            'promotion_price' => 38790000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 33
        DB::table('product')->insert([
            'name' => 'Asus ROG GX800VH',
            'slug' => changeTitle('Asus ROG GX800VH'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 145500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Asus Zenbook
        // id 34
        DB::table('product')->insert([
            'name' => 'Asus Zenbook UX430',
            'slug' => changeTitle('Asus Zenbook UX430'),
            'id_type' => '11',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 26990000,
            'promotion_price' => 26200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 35
        DB::table('product')->insert([
            'name' => 'Asus Zenbook 3 Deluxe UX490',
            'slug' => changeTitle('Asus Zenbook 3 Deluxe UX490'),
            'id_type' => '11',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 42490000,
            'promotion_price' => 41200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Asus Vivobook
        // id 36
        DB::table('product')->insert([
            'name' => 'Asus Vivobook S15',
            'slug' => changeTitle('Asus Vivobook S15'),
            'id_type' => '12',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 16290000,
            'promotion_price' => 15190000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GL
        // id 37
        DB::table('product')->insert([
            'name' => 'Msi GL62 7RDX',
            'slug' => changeTitle('Msi GL62 7RDX'),
            'id_type' => '13',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GV
        // id 38
        DB::table('product')->insert([
            'name' => 'Msi GV62 7RD',
            'slug' => changeTitle('Msi GV62 7RD'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 23990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 39
        DB::table('product')->insert([
            'name' => 'Msi GV72 7RD',
            'slug' => changeTitle('Msi GV72 7RD'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 25490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 40
        DB::table('product')->insert([
            'name' => 'Msi GV72 7RE',
            'slug' => changeTitle('Msi GV72 7RE'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 25990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GP
        // id 41
        DB::table('product')->insert([
            'name' => 'Msi GP72M 7REX',
            'slug' => changeTitle('Msi GP72M 7REX'),
            'id_type' => '15',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 42
        DB::table('product')->insert([
            'name' => 'Msi GP62M 7REX',
            'slug' => changeTitle('Msi GP62M 7REX'),
            'id_type' => '15',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 29490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GE
        // id 43
        DB::table('product')->insert([
            'name' => 'Msi GE63VR 7RE',
            'slug' => changeTitle('Msi GE63VR 7RE'),
            'id_type' => '16',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 40990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 44
        DB::table('product')->insert([
            'name' => 'Msi GE73VR 7RF',
            'slug' => changeTitle('Msi GE73VR 7RF'),
            'id_type' => '16',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 42690000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GS
        // id 45
        DB::table('product')->insert([
            'name' => 'Msi GS63VR 7RF',
            'slug' => changeTitle('Msi GS63VR 7RF'),
            'id_type' => '17',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 53200000,
            'promotion_price' => 50900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GT
        // id 46
        DB::table('product')->insert([
            'name' => 'Msi GT83VR 7RF Titan',
            'slug' => changeTitle('Msi GT83VR 7RF Titan'),
            'id_type' => '18',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 122900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 47
        DB::table('product')->insert([
            'name' => 'Msi GT75VR 7RE Titan',
            'slug' => changeTitle('Msi GT75VR 7RE Titan'),
            'id_type' => '18',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 64490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Asprie
        // id 48
        DB::table('product')->insert([
            'name' => 'Acer Aspire 7 A715',
            'slug' => changeTitle('Acer Aspire 7 A715'),
            'id_type' => '19',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 17550000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Nitro
        // id 49
        DB::table('product')->insert([
            'name' => 'Acer Nitro 5 AN515',
            'slug' => changeTitle('Acer Nitro 5 AN515'),
            'id_type' => '20',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 22950000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Spin
        // id 50
        DB::table('product')->insert([
            'name' => 'Acer Spin 5 SP513',
            'slug' => changeTitle('Acer Spin 5 SP513'),
            'id_type' => '21',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 19800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Asprie V Nitro
        // id 51
        DB::table('product')->insert([
            'name' => 'Acer VX5 591G',
            'slug' => changeTitle('Acer VX5 591G'),
            'id_type' => '22',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 23900000,
            'promotion_price' => 22100000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Lenovo Thinkpad
        // id 52
        DB::table('product')->insert([
            'name' => 'Lenovo Thinkpad E560',
            'slug' => changeTitle('Lenovo Thinkpad E560'),
            'id_type' => '23',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 11500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Macbook Pro
        // id 53
        DB::table('product')->insert([
            'name' => 'Macbook Pro 2017',
            'slug' => changeTitle('Macbook Pro 2017'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 48500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 54
        DB::table('product')->insert([
            'name' => 'Macbook Pro Retina 2017',
            'slug' => changeTitle('Macbook Pro Retina 2017'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 34500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 55
        DB::table('product')->insert([
            'name' => 'Macbook Pro 2016',
            'slug' => changeTitle('Macbook Pro 2016'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 44500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 56
        DB::table('product')->insert([
            'name' => 'Macbook Pro Retina 2016',
            'slug' => changeTitle('Macbook Pro Retina 2016'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 31800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Macbook Air
        // id 57
        DB::table('product')->insert([
            'name' => 'Macbook Air 2017',
            'slug' => changeTitle('Macbook Air 2017'),
            'id_type' => '25',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 20500000,
            'promotion_price' => 19500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 58
        DB::table('product')->insert([
            'name' => 'Macbook Air 2016',
            'slug' => changeTitle('Macbook Air 2016'),
            'id_type' => '25',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 19700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);
    }
}
