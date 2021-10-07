@extends('layouts.main')

@section('title', '食材登録')

@section('content')
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- @include('partial.food') --}}
    <form action="/foods" method="post">
        @csrf
        <table class="table-bordered mb-5 mt-3">
            <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
            <tr>
                <th>食材名</th>
                <td>
                    <input type="text" name="name" id="" value="{{ old('name') }}">
                </td>
            </tr>
            <tr>
                <th>カロリー(100gあたり)</th>
                <td>
                    <input type="number" name="cal" id="" value="{{ old('cal') }}">
                </td>
            </tr>
            <tr>
                <th>食材カテゴリ</th>
                <td>
                    <select name="category" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>評価(5段階)</th>
                <td>
                    <input type="number" name="point" id="" min=1 max=5 value="{{ old('point') }}">
                </td>
            </tr>
            <tr>
                <th>効果</th>
                <td>
                    <textarea name="effect" cols="50" rows="5"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="登録">
        <a href="{{ route('foods.index') }}">戻る</a>
    @endsection
