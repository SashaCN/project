<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    @vite('resources/sass/style.sass')
    @vite('resources/js/popup.js')

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

            <div class="profile-controll flex-line">
                <a class="basket-link" href="#" title="Корзина">
                    <svg class="basket-link__icon">
                        <use xlink:href="{{ asset('img/sprite.svg#basket') }}"></use>
                    </svg>
                </a>
                <a class="profile-link"
                @if (Auth::id())
                    {{-- link to profile page if logged --}}
                    href='{{ route('profile') }}'
                @else
                    {{-- link for opening registr popup --}}
                    href="#"
                @endif
                title="Профіль">
                    <svg class="profile-link__icon">
                        <use xlink:href="{{ asset('img/sprite.svg#profile') }}"></use>
                    </svg>
                </a>

                <div class="popup-bg">
                    <div class="popup popup-bg__popup profile-controll__popup">
                        <div class="popup__close">
                            <svg class="popup__close-icon">
                                <use xlink:href="{{ asset('img/sprite.svg#close') }}"></use>
                            </svg>
                        </div>
                        <ul class="popup__nav-line">
                            <li><a href="#" class="popup__nav-item popup__nav-item__active">Вхід</a></li>
                            <li><a href="#" class="popup__nav-item">Реєстрація</a></li>
                        </ul>
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="login-form__line">
                                <x-input id="email" class="login-form__input" type="email" name="email" :value="old('email')" required autofocus />

                                <x-label class="login-form__label" for="email" :value="__('Електрона пошта')" />
                            </div>
                            <!-- Password -->
                            <div class="login-form__line">

                                <x-input class="login-form__input" id="password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                                    
                                <x-label class="login-form__label" for="password" :value="__('Пароль')" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-button class="ml-3">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>

                <ul class="profile-menu">

                </ul>
            </div>
        </nav>
    </header>
    <main>

    </main>
</body>
</html>
