<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Home</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/dc-logo.png') }}" type="images/png">
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <nav class="container">
            <figure>
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC">
            </figure>
            <ul>
                <li>
                    <a href="#">Characters</a>
                </li>
                <li>
                    <a href="#">Comics</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
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
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="Digital Comics">
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
    </main>
    <footer>
        <section class="container">
            <div class="sign">
                <a href="#">sign up now!</a>
            </div>
            <ul>follow us
                <li><img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="Periscope"></li>
                <li><img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="Facebook"></li>
                <li><img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="Pinterest"></li>
                <li><img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="Youtube"></li>
                <li><img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="Twitter"></li>
            </ul>
        </section>
    </footer>
</body>

</html>
