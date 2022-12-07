<!-- Подвал -->
<footer class="footer">
    <div class="footer__container container py-12 xl:py-10 md:py-8 sm:py-6">
        <!-- Логотип с названием сайта -->
        <div class="footer__logo logo">
            <div class="logo__image"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></div>
            <div class="logo__caption">
                <span class="title">SafeUA</span>
                <span class="subtitle">Від людей для людей</span>
            </div>
        </div>
        <!-- Навигация -->
        <nav class="footer__menu menu">
            <ul class="menu__list">
                <li><a href="{{ route('histories') }}">Історії</a></li>
                <li><a href="{{ route('volonter') }}">Допомога</a></li>
                <li><a href="{{ route('photos-index') }}">Фото архів</a></li>
                <li><a href="{{ route('map') }}">Мапа</a></li>
            </ul>
        </nav>
        <!-- Условия пользования -->
        <div class="terms"><a href="">Terms and Conditions</a></div>

        <!-- Копирайт -->
        <div class="copyrights">@Copyright</div>

        <!-- Кнопка навигации -->
        <div class="footer__button"><a href="" class="arrow p-6 lg:p-5 md:p-3"><img
                    src="{{ asset('img/layout/footer/arrow.svg') }}" alt="Повернутися вгору"></a>
        </div>
    </div>
</footer>
