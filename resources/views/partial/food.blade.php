<div class="row">
    <div>
        @if ($food->img_path !== null )
        <img src="{{ url($food->img_path) }}" class="square-img">
        @endif
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('foods.show', $food->id) }}">{{ $food->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $food->effect }}</div>
        </div>
    </div>
</div>
