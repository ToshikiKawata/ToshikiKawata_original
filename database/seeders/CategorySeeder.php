<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // カテゴリーテーブルにデータが入っていなかった場合に実行する。
        if (!DB::table('categories')->first()) {
            DB::table('categories')->insert([
                ['name' => '肉'],
                ['name' => '魚'],
                ['name' => '野菜'],
                ['name' => '芋'],
                ['name' => '豆'],
                ['name' => '米'],
                ['name' => '卵'],
                ['name' => '発酵食品'],
                ['name' => '酒'],
                ['name' => '飲み物'],
            ]);
        }
    }
}
