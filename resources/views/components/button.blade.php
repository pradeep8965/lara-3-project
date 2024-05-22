{{-- <button>{{$title}}</button> --}}

@props(['dropdown' => false])

@if ($dropdown)
    <div class="btn-group">
        <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $title }}
        </button>
        <ul class="dropdown-menu">
            {{ $slot }}
        </ul>
    </div>
@else
    <button class="btn btn-outline-secondary">{{ $title }}</button>
@endif