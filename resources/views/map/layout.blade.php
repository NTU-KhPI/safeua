<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Scripts and Styles-->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	{{-- Icon --}}
	<link rel="shortcut icon" type="image/svg" href="{{ asset('img/logo-light.svg') }}" type="image/x-icon">
	<title>Мапа</title>
</head>

<body>

	<!-- Шапка -->
	<header class="header">
		<!-- Для фона и бургера -->
		<div class="header-bg"></div>
		<!-- Контейнер -->
		<div class="header__container container">
			<!-- Лого -->
			<div class="header__logo logo">
				<div class="logo__image"><img src="{{ asset('img/logo-light.svg') }}" alt="Logo"></div>
				<div class="logo__caption">
					<span class="title">SafeUA</span>
					<span class="subtitle">Від людей для людей</span>
				</div>
			</div>
			<!-- Меню -->
			<div class="header__menu menu">
				<div class="menu__burger burger-menu"><span></span></div>
				<nav class="menu__body">
					<ul class="menu__list">
						<li><a href="">Історії</a></li>
						<li><a href="">Регіони</a></li>
						<li><a href="">Допомога</a></li>
						<li><a href="">Фото архів</a></li>
						<li><a href="">Мапа</a></li>
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
			<!-- Кнопка входа -->
			<div class="header__button"><a href="" class="button button_transparent"><span>Увійти</span></a></div>
			<div class="header__button xl:hidden"><a href="" class="button"><span>Реєстрація</span></a></div>
		</div>
	</header>

    @yield('content')

	<!-- Подвал -->
	<footer class="footer">
		<div class="footer__container container py-16 xl:py-14 lg:py-11 md:py-9 sm:py-7">
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
					<li><a href="">Історії</a></li>
					<li><a href="">Регіони</a></li>
					<li><a href="">Допомога</a></li>
					<li><a href="">Фото архів</a></li>
					<li><a href="">Мапа</a></li>
				</ul>
			</nav>
			<!-- Условия пользования -->
			<div class="terms"><a href="">Terms and Conditions</a></div>

			<!-- Копирайт -->
			<div class="copyrights">@Copyright</div>

			<!-- Кнопка навигации -->
			<div class="footer__button"><a href="" class="arrow p-8 xl:p-6 lg:p-5 md:p-3"><img src="{{ asset('img/layout/footer/arrow.svg') }}"
						alt="Повернутися вгору"></a>
			</div>
		</div>
	</footer>

    <!--Подключаем Jquery-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>