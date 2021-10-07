<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\FoodRequest;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        // $foods = Food::paginate(10);
        // return view('foods.index', compact('foods'));
        // $name = $request->name;
        $category = $request->category;

        // $query = Food::query();
        // if (!empty($category)) {
        //     $query->where('category', 'like', '%' . $category . '%');
        // }
        // $foods = $query->paginate(10);
        $params = $request->query();
        $foods = Food::search($params)->paginate(10);
        
        $foods->appends(compact('category'));
        return view('foods.index', compact('foods'));
    }
    
    public function show(Food $food)
    {
        return view('foods.show', compact('food'));
    }
    
    public function create()
    {
        $categories = Category::all();
        return view('foods.create', compact('categories'));
    }
    public function edit($id)
    {
        $categories = Category::all();
        $food = food::find($id);
        return view('foods.edit',compact('categories'), ['food' => $food]);
    }
    
    public function store(FoodRequest $request)
    {
        // インスタンスの作成
        $food = new food;
        // 値の用意
        $food->name = $request->name;
        $food->cal = $request->cal;
        $food->category_id = $request->category_id;
        $food->effect = $request->effect;
        $food->point = $request->point;
        // インスタンスに値を設定して保存
        $food->save();
        // 登録したらindexに戻る
        return redirect('/foods');
    }

    public function update(FoodRequest $request, $id)
    {
        // インスタンスの作成
        $food = food::find($id);
        // 値の用意
        $food->name = $request->name;
        $food->cal = $request->cal;
        $food->category_id = $request->category_id;
        $food->effect = $request->effect;
        $food->point = $request->point;
        // インスタンスに値を設定して保存
        $food->save();
        // 登録したらindexに戻る
        return redirect('/foods');
    }
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
}
