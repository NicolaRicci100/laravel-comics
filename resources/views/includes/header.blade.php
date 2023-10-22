@php
    $links = config('main_menu');
@endphp

<header>
    <nav class="container">
        <a href="{{ route('home') }}">
            <figure>
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC">
            </figure>
        </a>
        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ route('comics') }}">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
