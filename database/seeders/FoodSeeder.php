<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
            [
                'name' => 'ブロッコリー',
                'cal' => '10',
                'category_id' => 2,
                'img_url' => '',
                'effect' => 'ビタミン豊富、食物繊維豊富',
                'point' =>  '5'
            ],
            [
                'name' => '鶏肉',
                'cal' => '100',
                'category_id' => 4,
                'img_url' => '',
                'effect' => '高タンパク低脂質、筋力アップ',
                'point' => '5'
            ],
        ]);
    }
}
