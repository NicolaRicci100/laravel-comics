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
</body>

</html>
