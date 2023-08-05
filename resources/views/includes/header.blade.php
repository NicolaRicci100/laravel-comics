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
                    <a href="#">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
