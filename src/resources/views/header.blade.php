<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miki Yukino portfoliosite
    </title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">Miki Yukino</h1>
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__list-item">
                        <a class="nav__item" href="">works</a>
                    </li>
                    <li class="header__list-item">
                        <a class="nav__item" href="">contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="sns-item">
            <a href="">
            <img src="{{ asset('/images/Instagram_Glyph_Gradient.png') }}"  alt="Instagram" class="Instagram-image"/>
            </a>
        </div>
    </footer>
</body>
</html>