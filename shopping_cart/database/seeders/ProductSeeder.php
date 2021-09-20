<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            'name'=>'LG mobile',
            'price'=>'900',
            'description'=>'A smart phone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://img.shopping.friday.tw/images/product/252/7580191/7580191_3_2.jpg?235030'
        ],
            [
            'name'=>'Oppo moblie',
            'price'=>'300',
            'description'=>'A smart phone with 8gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://tshop.r10s.com/9d9/b51/3b4e/40ae/b098/f41a/e2c8/11e1ebad2e0242ac110004.jpg'
        ],
        [
            'name'=>'Panasonic TV',
            'price'=>'400',
            'description'=>'A smart TV with much more feature',
            'category'=>'tv',
            'gallery'=>'https://www.panasonic.com/content/dam/pim/mi/en/TH/TH-L42/TH-L42ET60M/TH-L42ET60M-Variation_Image_for_See_All_1Global-1_mi_en.png.thumb.109.145.png'
        ],
        [
            'name'=>'Sony TV',
            'price'=>'600',
            'description'=>'A smart TV with much more feature',
            'category'=>'tv',
            'gallery'=>'https://www.sony.com.tw/image/d4f672c8c1b08401c3fb67cce747b7db?fmt=pjpeg&wid=330&hei=330&bgcolor=F1F5F9&bgc=F1F5F9'
        ],
        [
            'name'=>'LG Refigerator',
            'price'=>'900',
            'description'=>'A refrigerator with much more feature',
            'category'=>'refrigerator',
            'gallery'=>'https://www.lg.com/us/images/refrigerators/md08000032/gallery/desktop-01.jpg'
        ]
        ]);
    }
}
