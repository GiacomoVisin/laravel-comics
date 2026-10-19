@props(['comic'])

<div class="card bg-transparent border-0">
    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
    <div class="card-body px-0 pt-2">
        {{ $slot }}
    </div>
</div>