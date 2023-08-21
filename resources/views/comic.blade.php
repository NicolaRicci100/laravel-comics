@extends('layouts.main')
@section('title', $comic['title'])
@section('main-content')
    <section id="single-comic">
        <div class="large-jumbo">
            <figure class="figure-comic">
                <div class="comic-label label-top">
                    {{ $comic['type'] }}
                </div>
                <div class="comic-label label-down">
                    view gallery
                </div>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </figure>
        </div>
        <div class="info-container">
            <div class="product-info">
                <div>
                    <h2>{{ $comic['title'] }}</h2>
                    <div id="buy-info">
                        <span>U.S. Price {{ $comic['price'] }}</span>
                        <span>AVAILABLE</span>
                        <div class="inline">Check Availability &#9662;</div>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <figure>
                    <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="adv">
                </figure>
            </div>
        </div>
        <div class="credits">
            <div class="comic-credits">
                <table id="talent">
                    <tr>
                        <th>Talent</th>
                    </tr>
                    <tr>
                        <td>Art by:</td>
                        {{-- <td>{{ $comic['artists'] }}</td> --}}
                    </tr>
                    <tr>
                        <td>Written by:</td>
                        {{-- <td>{{ $comic['writers'] }}</td> --}}
                    </tr>
                </table>
                <table id="specs">
                    <tr>
                        <th>Specs</th>
                    </tr>
                    <tr>
                        <td>Series:</td>
                        <td>{{ $comic['series'] }}</td>
                    </tr>
                    <tr>
                        <td>U.S. Price:</td>
                        <td>{{ $comic['price'] }}</td>
                    </tr>
                    <tr>
                        <td>On Sale Date:</td>
                        <td>{{ $comic['sale_date'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
@endsection
