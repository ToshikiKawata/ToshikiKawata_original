<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Arr;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$name = $this->faker->word();
        $name = [
            '玄米',
            'アーモンド',
            'くるみ',
            '卵',
            '蕎麦',
            '鶏むね肉',
            'ブロッコリー',
            '牛肉',
            '豚肉',
            '豆腐',
            '甘酒',
            'コーヒー',
            '白ワイン',
            '赤ワイン',
            'キムチ',
            'ヨーグルト',
            '味噌汁',
            '納豆',
            'ハーブティー'
        ];
        return [
            'name' => $name[array_rand($name)],
            'cal' => $this->faker->numberBetween,
            'category_id' => Arr::random(Arr::pluck(Category::all(), 'id')),
            'img_path' => 'storage/food_image/' . rand(1, 11) . '.jpeg',
            'effect' => 'ビタミン豊富、食物繊維豊富',
            'point' =>  '5'
        ];
    }
}
