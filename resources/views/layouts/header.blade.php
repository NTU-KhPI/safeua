<!-- Шапка -->
<header class="header">
    <!-- Для фона и бургера -->
    <div class="header-bg"></div>
    <!-- Контейнер -->
    <div class="header__container container">
        <!-- Лого -->
        <div class="header__logo logo">
            <a href="{{route('home', [], false)}}" class="d-flex gap-2">
                <div class="logo__image"><img src="{{ asset('img/logo-light.svg') }}" alt="Logo"></div>
                <div class="logo__caption" style="color: #fff">
                    <span class="title">SafeUA</span>
                    <span class="subtitle">Від людей для людей</span>
                </div>
            </a>
        </div>
        <!-- Меню -->
        <div class="header__menu menu">
            <div class="menu__burger burger-menu"><span></span></div>
            <nav class="menu__body">
                <ul class="menu__list">
                    <li><a href="{{ route('histories') }}">Історії</a></li>
                    <li><a href="{{ route('volonter') }}">Допомога</a></li>
                    <li><a href="{{ route('photos-index') }}">Фото архів</a></li>
                    <li><a href="{{ route('map') }}">Мапа</a></li>
                </ul>
            </nav>
        </div>
        <!-- Смена языка -->
        <div class="language">
            <select id="language-select" class="language__items">
                <option value="ua" class="language__item" selected>ua</option>
                <option value="en" class="language__item">en</option>
            </select>
        </div>
        {{-- Авторизация --}}
        @if (Route::has('login'))
        @auth
        <button type="button" class="auth-user" id="auth-user-button">
            <div class="auth-user-data">
                <div class="auth-user-avatar"><img src="{{ asset('img/users/'.Auth::user()->avatar) }}" alt="Me">
                </div>
                <div class="auth-user-name">
                    {{ Auth::user()->name_f }}
                </div>
                <div class="auth-user-actions__wrapper hidden">
                    <ul class="auth-user-actions">
                        <li class="auth-user-action"><a href="{{ route('profile') }}">Профіль</a></li>
                        <li class="auth-user-action">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="logout" href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Вийти
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </button>
        @else
        <div class="header__button"><a href="{{ route('login') }}"
                class="button button_transparent"><span>Увійти</span></a></div>

        @if (Route::has('register'))
        <div class="header__button xl:hidden"><a href="{{ route('register') }}"
                class="button"><span>Реєстрація</span></a></div>
        @endif
        @endauth
        @endif
    </div>
</header>
