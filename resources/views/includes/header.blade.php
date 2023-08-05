@php
    $links = config('main_menu');
@endphp

<header>
    <nav class="container">
        <figure>
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC">
        </figure>
        <ul>
            @foreach ($links as $link)
                <li>
                    <a @if (Route::is($link['route'])) class="active" @endif
                        href="{{ route($link['route']) }}">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
