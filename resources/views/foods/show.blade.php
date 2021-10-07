@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    @include('partial.food')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>食材名</th>
                <td>{{ $food->name }}</td>
            </tr>
            <tr>
                <th>カロリー(100gあたり)</th>
                <td>{{ $food->cal }}</td>
            </tr>
            <tr>
                <th>食品カテゴリ</th>
                <td>{{ $food->category->name }}</td>
            </tr>
            <tr>
                <th>評価(5段階)</th>
                <td>{{ $food->point }}</td>
            </tr>
            <tr>
                <th>効果</th>
                <td>{{ $food->effect }}</td>
            </tr>
        </tbody>
    </table>
    <p><a href="/foods/{{ $food->id }}/edit"><input type="submit" value="編集"></a></p>
    <form action="/foods/{{ $food->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form>
    <a href="{{ route('foods.index') }}">戻る</a>
@endsection
