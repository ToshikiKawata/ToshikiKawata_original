@extends('layouts.main')

@section('title', '食材画面')
@section('content')
    @if (!empty($foods))
        <ul>
            @foreach ($foods as $food)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.food')
                </li>
            @endforeach
        </ul>
    @endif
    <div class="d-flex justify-content-center">
        {{ $foods->links() }}
    </div>
@endsection
<a href="/foods/create">新規登録</a>