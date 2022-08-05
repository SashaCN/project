<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    @vite('resources/sass/style.sass')
</head>
<body>
    <header class="header">
        <nav class="wrapper flex-line">

            <a class="logo header__logo" href="{{ route('index') }}">
                <svg class="logo__svg">
                    <use xlink:href="{{ asset('img/sprite.svg#logo') }}"></use>
                </svg>
            </a>

            <a class="catalog header__catalog flex-line" href="#">
                <svg class="catalog__svg">
                    <use xlink:href="{{ asset('img/sprite.svg#catalog') }}"></use>
                </svg>
                <span class="catalog__text">Католог</span>
            </a>

            <form class="search-form header__search-form" action="#">
                @csrf

                <input class="search-form__input" type="search" name="search" id="search" placeholder="Пошук ...">
                <label class="search-form__label" for="search" >
                    <svg class="search-form__icon">
                        <use xlink:href="{{ asset('img/sprite.svg#search') }}"></use>
                    </svg>
                </label>

                <button class="search-form__button" type="submit">Знайти</button>
            </form>

            <div class="profile-menu flex-line">
                <a class="basket-link" href="#">
                    <svg class="basket-link__icon">
                        <use xlink:href="{{ asset('img/sprite.svg#basket') }}"></use>
                    </svg>
                </a>
                <a class="profile-link" href="#">
                    <svg class="profile-link__icon">
                        <use xlink:href="{{ asset('img/sprite.svg#profile') }}"></use>
                    </svg>
                </a>

                <ul class="profile-menu-links">
                    @if (Auth::id())
                        <li class="profile-menu-links__item">
                            <form class="profile-menu-links__link" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                        class="primeri-btm-a"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                    @else
                        <li class="profile-menu-links__link">
                            <a class="profile-menu-links__item" href="{{ route('login') }}">Вхід</a>
                        </li>
                        <li class="profile-menu-links__link">
                            <a class="profile-menu-links__item" href="{{ route('register') }}">Реєстрація</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
