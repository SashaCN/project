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
        <div class="wrapper flex-line">
            <a href="{{ route('index') }}" class="logo header__logo">
                <svg class="logo__svg">
                    <use xlink:href="{{ asset('img/sprite.svg#logo') }}"></use>
                </svg>
            </a>
            <a href="#" class="catalog header__catalog flex-line">
                <svg class="catalog__svg">
                    <use xlink:href="{{ asset('img/sprite.svg#catalog') }}"></use>
                </svg>
                <span>Католог</span>
            </a>
        </div>
    </header>
@if (Auth::id())
    <h1>loggined</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-responsive-nav-link :href="route('logout')"
                class="primeri-btm-a"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
      </form>
@else
  <li><a href="{{ route('login') }}" class="primeri-btm-a">Log in</a></li>
  <li><a href="{{ route('register') }}" class="primeri-btm-a">Log up</a></li>
@endif
</body>
</html>
