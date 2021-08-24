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
                'name' => '獨創口味原燒四入組(醬燒/青花交/金沙)',
                'price' => '500',
                'description' => '新品全台首創，獨創口味圓燒四入組(醬燒/金沙/青花椒)
            ，入口醬油甘醇醬香，搭配蔬果增加甜味，不死鹹
            每日現烤，限量100包，動作要快喔！！',
                'category' => '肉乾三合一',
                'gallery' => 'https://sgh.tw/images/1624003387445.jpg',
            ],
            [
                'name' => '台味醬燒肉乾',
                'price' => '200',
                'description' => '新品全台首創，台味醬燒肉乾，入口醬油甘醇醬香，搭配蔬果增加甜味，不死鹹
                每日現烤，限量100包，動作要快喔！！',
                'category' => '肉乾三合一',
                'gallery' => 'https://sgh.tw/images/1623980294939.jpg',
            ],
            [
                'name' => '青花椒圓燒肉乾',
                'price' => '200',
                'description' => '新品全台首創，青花椒圓燒肉乾，嚴選江津九葉青花椒，一片就能吃到麻辣鍋的清香帶麻滋味，專為怕辣但又想吃辣的你所研發的新口味！
                每日現烤，限量100包，動作要快喔！！',
                'category' => '肉乾三合一',
                'gallery' => 'https://sgh.tw/images/1616125976331.jpg',
            ],
            [
                'name' => '原燒豬肉乾(檸檬)',
                'price' => '200',
                'description' => '每日鮮榨檸檬汁，微微果酸
                忍不住 一口接一口秒吃一整包
                每日現烤，限量100包，動作要快喔',
                'category' => '肉乾三合一',
                'gallery' => 'https://sgh.tw/images/1616127086681.jpg',
            ]
        ]);
    }
}
