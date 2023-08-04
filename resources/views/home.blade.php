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
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
                <div class="card">
                    <figure>
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="placeholder">
                    </figure>
                    <div>titolo placheolder</div>
                </div>
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
    <section class="background logo">
        <div class="container main-footer">
            <div>
                <ul><strong>DC COMICS</strong>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <ul><strong>SHOP</strong>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <ul><strong>DC</strong>
                <li>Terms of Use</li>
                <li>Privacy policy (New)</li>
                <li>Ad Choices</li>
                <li>Advertising</li>
                <li>Jobs</li>
                <li>Subscriptions</li>
                <li>Talent Workshops</li>
                <li>CPSC Certificates</li>
                <li>Ratings</li>
                <li>Shop help</li>
                <li>Contact Us</li>
            </ul>
            <ul><strong>SITES</strong>
                <li>DC</li>
                <li>MAD Magazine</li>
                <li>DC Kids</li>
                <li>DC Universe</li>
                <li>DC Power Vista</li>
            </ul>
        </div>
    </section>
@endsection
