<header class="header flex-shrink-0">
    <div class="container">
        <div class="header__rowLogo">
            <a href="/"><img src="../img/Logo.svg" alt="logo" class="header__logo"></a>
            <div class="rowLogo__texts">
                <a href="/" class="text_logo">SafeUA</a><br>
                <span class="text_slogan">Від людей для людей</span>
            </div>
        </div>
        <div class="header__menu menu">
            <nav class="menu__body">
                <ul class="menu__list">
                    <li class="menu__items"><a href="/history" class="menu__link">Історії</a></li>
                    <li class="menu__items"><a href="{{route('map')}}" class="menu__link">Регіони</a></li>
                    <li class="menu__items"><a href="/help" class="menu__link">Допомога</a></li>
                    <li class="menu__items"><a href="{{route('photos-index')}}" class="menu__link">Фото архів</a></li>
                </ul>
            </nav>
            <div class="menu__btn">
                <div class="dropdown-group">
                    <button type="button" class="btn-menu-header dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UA
                    </button>
                    <div class="dropdown-menu-header dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item-header dropdown-item" type="button">Ukrainian</button>
                        <button class="dropdown-item-header dropdown-item" type="button">English</button>
                    </div>
                </div>
    
                <!-- <a href="/login" class="log_in">Log In</a>
                <a href="#"><img src="../img/header_img/icon_profile.svg" alt="" class="btn__icon-profile"></a> -->
                @if (Route::has('login'))
                    @auth
                        <div class="dropdown-group">
                            <button type="button" class="btn-menu-header dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name_f }}
                            </button>
                            <div class="dropdown-menu-header dropdown-menu dropdown-menu-right">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item-header dropdown-item" href="/profile">Профіль</a>
                                    </a>                                    
                                    <a class="dropdown-item-header dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Вийти') }}
                                    </a>
                                    
                                </form>
                            </div>
                        </div>
    
                    @else
                        <a href="{{ route('login') }}" class="log_in">Log in</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <div class="menu__icon">
            <span class="icon__lines"></span>
        </div>
    </div>
</header>
