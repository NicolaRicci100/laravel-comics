{{-- MOMENTANEAMENTE IDENTICA ALLA PAGINA COMICS --}}
@extends('layouts.main')
@section('title', 'Home')
@section('main-content')
    <section class="first-section">
        <div class="jumbo-background">
            <div class="blue-button mid-section">
                <a href="#">Current Series</a>
            </div>
        </div>
        <div class="container content">
            <div class="card-container">
                @foreach ($comics as $comic)
                    <div class="card">
                        <a href="{{ route('comic', $loop->index) }}">
                            <figure>
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </figure>
                        </a>
                        <div>{{ $comic['title'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="blue-button">
            <a href="#">Load More</a>
        </div>
    </section>
    <section class="second-section">
        <ul class="container navbar">
            <li>
                <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                <p>digital comics</p>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="Merchandise">
                <p>dc merchandise</p>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="Subscriptions">
                <p>subscription</p>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="Shop Locator">
                <p>comic shop locator</p>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="Power Visa">
                <p>dc power visa</p>
            </li>
        </ul>
    </section>
@endsection
